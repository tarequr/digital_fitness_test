<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Model\BusinessType;
use App\Model\Section;
use App\Model\Question;
use Session;

class QuestionController extends Controller
{
    public function index()
    {
    	$questions = Question::orderBy('id','desc')->get();
    	return view('backEnd.question.view-question',['questions'=>$questions]);
    }

    public function create()
    {
    	$data['sections'] = Section::all();
    	return view('backEnd.question.add-question',$data);
    }

    public function store(QuestionRequest $request)
    {
        $question = new Question();
        $question->sectionId  = $request->section_name;
        $question->name       = $request->name;
        $question->weightage  = $request->weightage;

        $section = Section::find($request->section_name);
        $question->businessTypeId = $section->businessTypeId;
        $question->save();

    	
    	Session::flash('message','Question Save Successfully!');
    	return redirect()->route('question.view');
    }

    public function edit($id)
    {
    	$data['editQuestion'] = Question::find($id);
    	$data['sections']     = Section::all();

    	return view('backEnd.question.add-question',$data);
    }

    public function update(QuestionRequest $request,$id)
    {
        $question = Question::find($id);
        $question->sectionId = $request->section_name;
        $question->name      = $request->name;
        $question->weightage = $request->weightage;
        
        $section = Section::find($request->section_name);
        $question->businessTypeId = $section->businessTypeId;
        $question->save();
    	
    	Session::flash('message','Question Update Successfully!');
    	return redirect()->route('question.view');
    }

    public function delete($id)
    {
    	$question = Question::find($id);
    	$question->delete();

    	Session::flash('message','Question Delete Successfully!');
    	return redirect()->route('question.view');
    }

}
