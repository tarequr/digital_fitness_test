<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
use Mail;

class UserVerifyController extends Controller
{
    public function regPermission()
    {
    	return view('frontEnd.user.user-reg-permission');
    }

    public function updateUser()
    {
    	$user = User::find(Session::get('user_id'));
    	return view('frontEnd.user.user-update',compact('user'));
    }

    public function signupStore(Request $request,$id)
    {
    	$code = rand(00000,99999);
    	$user = User::find($id);
    	$user->email    = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->code     = $code;
    	$user->save();

    	$data = array(
            'email' => $request->email,
            'code'  => $code
        );

        Mail::send('frontEnd.email.verify-email',$data, function($message) use($data) {
            $message->from('tanjirhasan2020@gmail.com','Disital Fitness Test');
            $message->to($data['email']);
            $message->subject('Please verify your email address');
        });

        Session::flash('success','You have successfully signed up, Please verify your email!');
        return redirect()->route('email.verify');
    }

    public function emailVerify()
    {
        return view('frontEnd.user.user-email-verify');
    }

    public function emailStore(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'code'  => 'required'
        ]);

        $checkData = User::where('email', $request->email)->where('code', $request->code)->first();

        if ($checkData) 
        {
            $checkData->status = '1';
            $checkData->save();

            Session::flash('success','Verify successfully done, Please login!');
            return redirect()->route('login');
        }else{
            Session::flash('error','Sorry! email or varification code invalid.');
            return redirect()->back();
        }
    }

    public function userLogin()
    {
    	return view('frontEnd.user.user-login');
    }
}
