<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ContentModel;
use App\Models\TeamModel;
use App\Models\InformationModel;
use App\Models\ArtikelModel;
use App\Models\KategoriArtikelModel;
use App\Models\QuestionsModel;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan; 

class FrontendController extends Controller
{
    public function home()
    {
    	$slider = ContentModel::where('type_content', 1)->where('status', 1)->get();
        $insights = ArtikelModel::where('category_article_id', 1)->where('status', 1)->orderBy('created_at', 'DESC')->take(4)->get();
        $case_study = ArtikelModel::where('category_article_id', 2)->where('category_article_id', 2)->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();
        $banner1 = InformationModel::where('type_content', 7)->where('status', 1)->first();
        $banner2 = InformationModel::where('type_content', 8)->where('status', 1)->first();
        $banner3 = InformationModel::where('type_content', 9)->where('status', 1)->first();

    	return view('frontend.home.home', compact('slider', 'insights', 'case_study', 'banner1', 'banner2', 'banner3'));
    }

    public function about_us()
    {
    	$about_us 	= InformationModel::where('type_content', 1)->first();
    	$testimonials = TestimonialModel::where('status', 1)->get();
        $vision = InformationModel::where('type_content', 4)->first();
        $mission = InformationModel::where('type_content', 5)->first();
        
        return view('frontend.about_us.about_us', compact('about_us', 'testimonials', 'vision', 'mission'));
    }

    public function key_values_principles()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.about_us.key_values_principles', compact('testimonials'));
    }

    public function why_choose_us()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.about_us.why_choose_us', compact('testimonials'));
    }

    public function our_team()
    {
        $team = TeamModel::where('status', 1)->get();
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.about_us.our_team', compact('team', 'testimonials'));
    }

    public function detail_our_team($slug)
    {
        $team = TeamModel::where('slug', $slug)->where('status', 1)->firstOrFail();
        $insights = [];
        if (!empty($team->id)) {
            $insights = ArtikelModel::where('penulis', $team->id)->where('status', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        }

        $next_team = $this->next_team($slug);
        return view('frontend.about_us.detail_our_team', compact('team', 'insights', 'next_team'));
    }

    public function affiliation_partnership()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.about_us.affiliation_partnership', compact('testimonials'));
    }

    /* industries */
    public function all_industries()
    {
        $industries = ContentModel::where('type_content', 2)->where('status', 1)->get();
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.industries.all_industries', compact('industries', 'testimonials'));
    }

    public function detail_industries($title)
    {
        $industries = ContentModel::where('type_content', 2)->where('status', 1)->where('slug', $title)->firstOrFail();
        $insights = ArtikelModel::where('category_article_id', 1)->where('status', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.industries.detail_industries', compact('industries', 'insights', 'testimonials'));
    }

    public function readmore_industries($title)
    {
        $industries = ContentModel::where('type_content', 2)->where('status', 1)->where('slug', $title)->firstOrFail();
        return view('frontend.industries.readmore_industries', compact('industries'));
    }

    /* services */
    public function all_services()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
    	return view('frontend.services.all_service', compact('testimonials'));
    }

    public function tas()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
    	return view('frontend.services.tas', compact('testimonials'));
    }

    public function due_diligence()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
    	return view('frontend.services.due_diligence', compact('testimonials'));
    }

    public function valuation()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
    	return view('frontend.services.valuation', compact('testimonials'));
    }

    public function debt_advisory()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.services.debt_advisory', compact('testimonials'));
    }

    public function tax_advisory()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.services.tax_advisory', compact('testimonials'));
    }

    public function technology_digital()
    {
        $testimonials = TestimonialModel::where('status', 1)->get();
        return view('frontend.services.technology_digital', compact('testimonials'));
    }

    public function insights(Request $request)
    {
    	$insights = $this->get_insights($request);
    	$case_study = ArtikelModel::where('category_article_id', 2)->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();

        return view('frontend.insights.insights', compact('insights', 'case_study'));
    }

    public function detail_insights($slug)
    {
    	$detail = ArtikelModel::where('slug', $slug)->where('status', 1)->first();
    	$other_insights = ArtikelModel::where('status', 1)->orderBy('created_at', 'DESC')->take(5)->get();
    	return view('frontend.insights.detail_insights', compact('detail', 'other_insights'));
    }

    public function contacts()
    {
    	$contacts = InformationModel::where('type_content', 2)->first();
    	return view('frontend.contacts.contacts', compact('contacts'));
    }

    public function save_contacts(Request $request)
    {
    	try {
    		$create = new QuestionsModel;
    		$create->nama_depan = !empty($request->input('fullname')) ? $request->input('fullname') : NULL;
    		$create->email = !empty($request->input('email')) ? $request->input('email') : NULL;
    		$create->no_hp = !empty($request->input('contact')) ? $request->input('contact') : NULL;
    		$create->pesan = !empty($request->input('message')) ? $request->input('message') : NULL;
    		
    		if ($create->save()) {
                $details = [
                    'nama_depan' => $create->nama_depan,
                    'email' => $create->email,
                    'no_hp' => $create->no_hp,
                    'pesan' => $create->pesan,
                ];
                \Mail::to(env('MAIL_FROM_ADDRESS'))->send(new \App\Mail\EmailContacts($details));
		  		Alert::success('Success', 'Thank you for your inquiry. Our team will contact you shortly to assist with your M&A needs.');
		  	}else{
		  		Alert::error('Error', 'Failed');
		  	}

    	} catch (\Exception $e) {
    		Alert::error('Error', $e->getMessage());
    	}

    	return redirect(route('contacts'));
    }

    public function get_insights($request)
    {
        $model = ArtikelModel::where('status', 1);

        if (!empty($request->input('title'))) {
            $model->where('judul', $request->input('title'));
        }

        if (!empty($request->input('category'))) {
            $model->where('category_article_id', $request->input('category'));
        }

        return $model->orderBy('id', 'DESC')->paginate(12);
    }

    public function next_team($slug)
    {
        $teams = TeamModel::where('slug', $slug)->where('status', 1)->first();
        $result = [];
        if (!empty($teams->id)) {
            $nextId = $teams->id + 1;
            $result = TeamModel::where('id', $nextId)->where('status', 1)->first();
            if (empty($result->id)) {
                $result = TeamModel::where('status', 1)->orderBy('id', 'ASC')->first();
            }
        }

        return $result;
    }

    public function search(Request $request)
    {
        $result = $this->get_result_searach($request->input('q'));
        return view('frontend.search_result', compact('result'));
    }

    private function get_result_searach($q)
    {
        $SQL = "
            SELECT title, description, type_content, value1, value2, value3, value4, value5, slug,
            CASE
                WHEN type_content = 1 THEN 'Article'
                WHEN type_content = 2 THEN 'Industries'
                WHEN type_content = 3 THEN 'Services'
                ELSE 'Other'
            END AS category_content
            FROM content
            WHERE title LIKE '%".$q."%'
            OR description LIKE '%".$q."%' 
            OR value1 LIKE '%".$q."%' 
            OR value2 LIKE '%".$q."%' 
            OR value3 LIKE '%".$q."%' 
            OR value4 LIKE '%".$q."%' 
            OR value5 LIKE '%".$q."%'
            
            UNION
            SELECT title, description, type_content, value1, value2, value3, value4, value5, value2 as slug,
             CASE
                WHEN type_content = 1 THEN 'About Us'
                WHEN type_content = 2 THEN 'Contact'
                WHEN type_content = 3 THEN 'Social Media'
                WHEN type_content = 4 THEN 'Vision'
                WHEN type_content = 5 THEN 'Mission'
                WHEN type_content = 7 THEN 'Homepage'
                WHEN type_content = 8 THEN 'Homepage'
                WHEN type_content = 9 THEN 'Homepage'
                ELSE 'Other'
            END AS category_content
            FROM information_content
            WHERE title LIKE '%".$q."%'
            OR description LIKE '%".$q."%' 
            OR value1 LIKE '%".$q."%' 
            OR value2 LIKE '%".$q."%' 
            OR value3 LIKE '%".$q."%'
            OR value4 LIKE '%".$q."%' 
            OR value5 LIKE '%".$q."%'
        ";

        $query = DB::select($SQL);
        return $query;
    }

    public function clear_view_cache()
    {
        Artisan::call('view:clear');
        Alert::success('Success', 'View cache has been cleared');

        return back();
    }
}
