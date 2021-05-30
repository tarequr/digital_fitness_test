<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use App\Model\Question;

class QuestionController extends Controller
{
    public function businessType()
    {
    	$businessTypes = BusinessType::all();

    // dd($businessTypes->toArray());
    	return view('frontEnd.question.business-type',compact('businessTypes'));
    }

    public function businessWiseQtn($id)
    {
    	$questionCount = Question::where('businessTypeId',$id)->count();
    	// dd($questionCount);
    	$questions = Question::where('businessTypeId',$id)->orderBy('id','asc')->get();

    	return view('frontEnd.question.business-wise-question',compact('questionCount','questions'));
    }
}
