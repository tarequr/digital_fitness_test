<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use App\Model\Question;
use App\Model\Answer;
use Session;

class QuestionController extends Controller
{
    public function businessType()
    {
    	// if (!Session::get('user_id')) {

     //        Session::flash('error','Please complete your personal information!');
     //        return redirect()->route('frontEnd.home');
     //    }elseif (!Session::get('company_id')) {

     //        Session::flash('error','Please complete your company information!');
     //        return redirect()->route('company.info');
     //    }else{
     //        $businessTypes = BusinessType::all();
     //        return view('frontEnd.question.business-type',compact('businessTypes'));
     //    }
        $businessTypes = BusinessType::all();
            return view('frontEnd.question.business-type',compact('businessTypes'));
    }

    public function businessWiseQtn($id)
    {
    	$questionCount = Question::where('businessTypeId',$id)->count();
    	// dd($questionCount);
    	$questions = Question::where('businessTypeId',$id)->orderBy('id','asc')->get();

    	return view('frontEnd.question.business-wise-question',compact('questionCount','questions'));
    }

    public function businessQtnStore(Request $request)
    {
        //$request validation kore niyen

        foreach ($request->all() as $question_id => $answer) {
            $answer = new Answer();
            $answer->user_id = Session::get('user_id');
            $answer->question_id = $question_id;
            $answer->answer = $answer;
            //$answer->marks = Question::find($question_id)->weightage * $answer;
            $question = Question::find($question_id);
            dd($question);
            // $answer->marks = $question->weightage * $answer;

            $answer->save();

            return 'ok';
        }
    }
}
