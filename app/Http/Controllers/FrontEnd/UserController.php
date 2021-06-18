<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Answer;
use App\Model\CompanyInfo;
use Session;
use Auth;
use DB;

class UserController extends Controller
{
    public function userDashboard()
    {
    	$answers = Answer::selectRaw('section_id')
    				->where('user_id',Auth::user()->id)
    				->groupBy('section_id')->get();

    	return view('frontEnd.dashboard.home.user-dashboard',compact('answers'));
    }

    public function viewRecommendation($section_id)
    {
    	$recommendation    = Answer::selectRaw('section_id,sum(answers.marks) as marks')
			    				->where('section_id',$section_id)
			    				->where('user_id',Auth::user()->id)
			    				->groupBy('section_id')->first();

    	$questionData = DB::table('answers')
							   ->select(DB::raw('sum(questions.weightage) as weightage'))
							   ->join('questions','answers.question_id','=','questions.id')
							   ->where('answers.section_id',$section_id)
							   ->where('answers.user_id',Auth::user()->id)
							   ->get(); 

		$value = json_decode($questionData);
		$questionTotalMark = $value[0]->weightage;
		    		
    	return view('frontEnd.dashboard.home.user-recommendation',compact('recommendation','questionTotalMark'));
    }

    public function companyInfoView()
    {
    	$company_info = CompanyInfo::where('user_id',Auth::user()->id)->first();
    	return view('frontEnd.dashboard.company.company-info',compact('company_info'));
    }

    public function companyInfoEidt($id)
    {
    	$editCompany = CompanyInfo::find($id);
    	return view('frontEnd.dashboard.company.edit-company-info',compact('editCompany'));
    }

    public function companyInfoUpdate(Request $request,$id)
    {
    	$company = CompanyInfo::find($id);
        $company->user_id  = Auth::user()->id;
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
        //$company->qtn_16   = $request->qtn_16;
        //$company->qtn_17   = $request->qtn_17;
        //$company->qtn_18   = $request->qtn_18;
        //$question_19       = implode(',', $request->qtn_19);
        //$company->qtn_19   = $question_19;
        //$question_20       = implode(',', $request->qtn_20);
        //$company->qtn_20   = $question_20;
        $company->qtn_21   = $request->qtn_21;
        $company->qtn_22   = $request->qtn_22;
        $company->qtn_23   = $request->qtn_23;
        $company->save();

        Session::flash('message','Update company info successfully!!');
        return redirect()->route('company.info.view');
    }
}
