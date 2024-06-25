<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentModel;
use App\Models\ArtikelModel;
use App\Models\InformationModel;
use App\Models\QuestionsModel;
use App\Models\TeamModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_article = ArtikelModel::count();
        $total_questions = QuestionsModel::count();
        $total_team = TeamModel::count();
        $total_services = 5;
        return view('home', compact('total_article', 'total_questions', 'total_team', 'total_services'));
    }
}
