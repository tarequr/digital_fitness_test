<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use App\Model\Question;
use App\Model\Answer;
use Session;
use Auth;
use Validator;

class RetakeController extends Controller
{
    public function businessType()
    {
    	if (!(Auth::user()->id)) {
            Session::flash('error','Sorry! You are not authenticate');
            return redirect()->route('frontEnd.home');
        }else{
        	$user_id    = Auth::user()->id;
        	Session::put('user_id',$user_id);

            $businessTypes = BusinessType::all();
            return view('frontEnd.retake.retake-business-type',compact('businessTypes'));
        }
        
    }

    public function businessWiseQtn($id)
    {
    	$questionCount = Question::where('businessTypeId',$id)->count();
    	$questions = Question::where('businessTypeId',$id)->orderBy('id','asc')->get();

    	return view('frontEnd.retake.retake-business-question',compact('questionCount','questions'));
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

        $answers = Answer::where('user_id', auth()->id())->delete();

        foreach ($request->answer as $question_id => $ans) {
            $answer = new Answer();
            $answer->user_id = Auth::user()->id;
            $answer->question_id = $question_id;
            $answer->answer = $ans;
            $answer->section_id = Question::find($question_id)->sectionId;
            $answer->marks = Question::find($question_id)->weightage * $ans;
            $answer->save();
        }

        Session::flash('message','Answer save successfully!');
        return redirect()->route('user.dashboard');
    }

}
