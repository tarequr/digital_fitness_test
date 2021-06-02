<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CompanyInfo;
use App\User;
use Session;

class CompanyController extends Controller
{
    public function index()
    {
    	// if (Session::get('user_id')) {
     //        $user = User::find(Session::get('user_id'));
     //        return view('frontEnd.company.company-info',compact('user'));
     //    }else{
     //        Session::flash('error','Please complete your personal information!');
     //        return redirect()->route('frontEnd.home');
     //    }
        $user = User::find(Session::get('user_id'));
            return view('frontEnd.company.company-info',compact('user'));
    }

    public function store(Request $request)
    {
    	$company = new CompanyInfo();
    	$company->user_id  = $request->id;
    	$company->qtn_1    = $request->qtn_1;
    	$company->qtn_2    = $request->qtn_2;
    	$company->qtn_3    = $request->qtn_3;
    	$company->qtn_4    = $request->qtn_4;
    	$company->qtn_5    = $request->qtn_5;
    	$company->qtn_6    = $request->qtn_6;
    	$company->qtn_7    = $request->qtn_7;
    	$company->qtn_8    = $request->qtn_8;
    	$company->qtn_9    = $request->qtn_9;
    	$company->qtn_10   = $request->qtn_10;
    	$company->qtn_11   = $request->qtn_11;
    	$company->qtn_12   = $request->qtn_12;
    	$company->qtn_13   = $request->qtn_13;
    	$company->qtn_14   = $request->qtn_14;
    	$company->qtn_15   = $request->qtn_15;
    	$company->qtn_16   = $request->qtn_16;
    	$company->qtn_17   = $request->qtn_17;
    	$company->qtn_18   = $request->qtn_18;
    	$question_19       = implode(',', $request->qtn_19);
    	$company->qtn_19   = $question_19;
    	$question_20       = implode(',', $request->qtn_20);
    	$company->qtn_20   = $question_20;
    	$company->qtn_21   = $request->qtn_21;
    	$company->qtn_22   = $request->qtn_22;
    	$company->qtn_23   = $request->qtn_23;
    	$company->save();

        $company_id    = $company->id;
        Session::put('company_id',$company_id);

        Session::flash('message','You successfully submit your company info!!');
    	return redirect()->route('business.type');
    }
}
