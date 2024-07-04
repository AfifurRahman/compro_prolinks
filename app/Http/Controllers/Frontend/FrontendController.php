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
    	return view('frontend.home.home');
    }
    
    public function advance_vdr()
    {
        return view('frontend.home.advance');
    }

    public function ai_insight()
    {
        return view('frontend.home.ai-insight');
    }

    public function pricing()
    {
        return view('frontend.home.pricing');
    }

    public function company()
    {
        return view('frontend.home.company');
    }

    public function contact()
    {
        return view('frontend.home.contact');
    }

    public function resource(Request $request)
    {
        try {
            $pagenumber = $request->input('page', 1);
            $categoryarticle = $request->input('category', 'all');
    
            if ($categoryarticle == 'all') {
                $articles = ArtikelModel::where('status', 1)->orderBy('id','DESC')->skip(9 * ($pagenumber -1))->take(9)->get();
                $pagecount = ceil(ArtikelModel::where('status', 1)->count() / 9);
            } else {
                $articles = ArtikelModel::where('status', 1)->where('category_article_id', $categoryarticle)->orderBy('id','DESC')->skip(9 * ($pagenumber -1))->take(9)->get();
                $pagecount = ceil(ArtikelModel::where('status', 1)->where('category_article_id', $categoryarticle)->count() / 9);
            }
    
            $categories = KategoriArtikelModel::where('status', 1)->orderBy('id', 'DESC')->get();
           
            return view('frontend.home.resource', compact('articles', 'categories', 'pagecount', 'categoryarticle'));
        } catch (\Exception $e) {
            // nothing
        }
        
    }

    public function clear_view_cache()
    {
        Artisan::call('view:clear');
        Alert::success('Success', 'View cache has been cleared');

        return back();
    }
}
