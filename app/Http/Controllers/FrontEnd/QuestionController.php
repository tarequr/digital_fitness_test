<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use App\Model\Question;
use App\Model\Answer;
use Session;
use Validator;

class QuestionController extends Controller
{
    public function businessType()
    {
    	if (!Session::get('user_id')) {

            Session::flash('error','Please complete your personal information!');
            return redirect()->route('frontEnd.home');
        }elseif (!Session::get('company_id')) {

            Session::flash('error','Please complete your company information!');
            return redirect()->route('company.info');
        }else{
            $businessTypes = BusinessType::all();
            return view('frontEnd.question.business-type',compact('businessTypes'));
        }
        
    }

    public function businessWiseQtn($id)
    {
    	$questionCount = Question::where('businessTypeId',$id)->count();
    	$questions = Question::where('businessTypeId',$id)->orderBy('id','asc')->get();

    	return view('frontEnd.question.business-wise-question',compact('questionCount','questions'));
    }

    public function businessQtnStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'answer'   => 'required|array',
            'answer.*' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', $validator->messages()->first('answer'));
        }

        foreach ($request->answer as $question_id => $ans) {

            $answer = new Answer();
            $answer->user_id = Session::get('user_id');
            $answer->question_id = $question_id;
            $answer->answer = $ans;
            $answer->section_id = Question::find($question_id)->sectionId;
            $answer->marks = Question::find($question_id)->weightage * $ans;
            $answer->save();
        }

        Session::flash('message','Answer save successfully!');
        return redirect()->route('registation.permission');
    }
}
