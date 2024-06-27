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


    public function clear_view_cache()
    {
        Artisan::call('view:clear');
        Alert::success('Success', 'View cache has been cleared');

        return back();
    }
}
