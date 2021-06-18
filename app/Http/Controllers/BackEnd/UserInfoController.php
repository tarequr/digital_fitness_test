<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CompanyInfo;
use App\User;
use Session;

class UserInfoController extends Controller
{
    public function activeView()
    {
    	$users = User::where('user_type','user')->where('status',1)->orderBy('id','desc')->get();
    	return view('backEnd.users_info.active-user',compact('users'));
    }

    public function pendingView()
    {
    	$users = User::where('user_type','user')->where('status',0)->orderBy('id','desc')->get();
    	return view('backEnd.users_info.pending-user',compact('users'));
    }

    public function pendingDelete($id)
    {
    	User::find($id)->delete();
    	Session::flash('message','Pending user delete successfully!');
    	return redirect()->back();
    }

    public function companyView($id)
    {
    	$company_info = CompanyInfo::where('user_id',$id)->first();
    	return view('backEnd.users_info.company-info',compact('company_info'));
    }
}
