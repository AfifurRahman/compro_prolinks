<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\QuestionsModel;

class QuestionsController extends Controller
{
    public function questions()
    {
    	$questions = QuestionsModel::get();
    	return view('backend.questions.questions', compact('questions'));
    }

    public function detail_questions($id=NULL)
    {
    	if ($id == NULL) {
    		return redirect(route('questions'));
    	}

    	$questions = QuestionsModel::where('id', $id)->first();
    	return view('backend.questions.detail_questions', compact('questions'));
    }
}
