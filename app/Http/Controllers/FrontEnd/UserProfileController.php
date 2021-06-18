<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class UserProfileController extends Controller
{
    public function view()
    {
    	$user = User::find(Auth::user()->id);
    	return view('frontEnd.dashboard.profile.view-profile',['user'=>$user]);
    }

    public function edit()
    {
    	$editProfile = User::find(Auth::user()->id);
    	return view('frontEnd.dashboard.profile.edit-profile',['editProfile'=>$editProfile]);
    }

    public function update(Request $request)
    {
        $profileData = User::find(Auth::user()->id);
        $this->validate($request,[
            'name'  => 'required',
            'email' => 'required|unique:users,email,'.$profileData->id
        ]);
    	$profileData->name 	      = $request->name;
    	$profileData->email       = $request->email;
    	$profileData->phone       = $request->phone;
    	$profileData->gender      = $request->gender;

    	//image section Start
    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/user_images/'.$profileData->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$profileData['image'] = $filename;
    	}
    	//image section End

    	$profileData->save();

    	Session::flash('message','Profile Update Successfully!');
    	return redirect()->route('user.profile.view');
    }

    public function passwordView()
    {
    	return view('frontEnd.dashboard.profile.edit-password');
    }

    public function passwordUpdate(Request $request)
    {
    	$this->validate($request,[
    		'newPassword'     => 'required|min:6',
    		'confirmPassword' => 'required_with:newPassword|same:newPassword|min:6'
    	]);
    	
    	if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->currentPassword])) {
    		
    		$user = User::find(Auth::user()->id);
    		$user->password = bcrypt($request->newPassword);
    		$user->save();

    		Session::flash('message','Password Change Successfully');
    		return redirect()->route('user.profile.view');

    	}else{
    		Session::flash('error','Sorry! your current password dost not match');
    		return redirect()->back();
    	}
    }
}
