<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;

class RegistrationController extends Controller
{
    public function reg()
    {
    	return view('frontEnd.user.user-registration');
    }

    public function regStore(Request $request)
    {
    	$this->validate($request,[
    		'name'  => 'required',
    		'email' => 'required|unique:users',
    		'phone' => 'required',
    	]);

    	$user = new User();
    	$user->user_type     = 'user';
        $user->name          = $request->name;
        $user->email         = $request->email;
        $user->phone         = $request->phone;
        $user->title         = $request->title;
    	$user->designation   = $request->designation;
    	$user->grants_access = $request->grants_access ;
    	$user->save();

    	$user_id    = $user->id;
        Session::put('user_id',$user_id);

        Session::flash('message','You successfully submit your personal info!!');
    	return redirect()->route('company.info');
    }
}
