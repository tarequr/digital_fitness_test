<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessTypeRequest;
use Illuminate\Http\Request;
use App\Model\BusinessType;
use Session;

class BusinessTypeController extends Controller
{
    public function index()
    {
    	$businessTypes = BusinessType::orderBy('id','desc')->get();
    	return view('backEnd.business_type.view-business-type',['businessTypes'=>$businessTypes]);
    }

    public function create()
    {
    	return view('backEnd.business_type.add-business-type');
    }

    public function store(BusinessTypeRequest $request)
    {
    	$businessType = new BusinessType();
    	$businessType->name  = $request->name;
    	$businessType->save();

    	Session::flash('message','Business Type Save Successfully!');
    	return redirect()->route('business.type.view');
    }

    public function edit($id)
    {
    	$editBusinessType = BusinessType::find($id);
    	return view('backEnd.business_type.add-business-type',['editBusinessType'=>$editBusinessType]);
    }

    public function update(BusinessTypeRequest $request)
    {
    	$businessType = BusinessType::find($request->id);
    	$businessType->name = $request->name;
    	$businessType->save();

    	Session::flash('message','Business Type Update Successfully!');
    	return redirect()->route('business.type.view');
    }

    public function delete($id)
    {
    	$businessType = BusinessType::find($id);
    	$businessType->delete();

    	Session::flash('message','Business Type Delete Successfully!');
    	return redirect()->route('business.type.view');
    }
}
