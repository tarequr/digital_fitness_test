<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use App\Model\Section;
use Session;

class SectionController extends Controller
{
    public function index()
    {
    	$sections = Section::orderBy('id','desc')->get();
    	return view('backEnd.section.view-section',['sections'=>$sections]);
    }

    public function create()
    {
    	$data['businessTypes'] = BusinessType::all();
    	return view('backEnd.section.add-section',$data);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'business_type' => 'required',
    		'name'          => 'required|unique:sections'
    	]);
        $section = new Section();
        $section->businessTypeId = $request->business_type;
        $section->name           = $request->name;
        $section->save();
    	
    	Session::flash('message','Section Save Successfully!');
    	return redirect()->route('section.view');
    }

    public function edit($id)
    {
    	$data['editSection']   = Section::find($id);
    	$data['businessTypes'] = BusinessType::all();

    	return view('backEnd.section.add-section',$data);
    }

    public function update(Request $request,$id)
    {
        $section = Section::find($id);
        $this->validate($request,[
    		'business_type' => 'required',
    		'name'          => 'required|unique:sections,name,'.$section->id
    	]);
        $section->businessTypeId = $request->business_type;
        $section->name           = $request->name;
        $section->save();
    	
    	Session::flash('message','Section Update Successfully!');
    	return redirect()->route('section.view');
    }

    public function delete($id)
    {
    	$section = Section::find($id);
    	$section->delete();

    	Session::flash('message','Section Delete Successfully!');
    	return redirect()->route('section.view');
    }
}
