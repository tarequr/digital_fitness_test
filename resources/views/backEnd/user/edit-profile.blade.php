@extends('backEnd.master')

@section('title')
Edit Password
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('profiles.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-user"></i> Your Profile</a>
    </div>
  </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h3 class="text-center text-success"> <!-- {{ Session::get('message')}}  --></h3>
                    <h1 class="h4 text-gray-900 mb-4">Update Profile!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('profiles.update') }}" enctype="multipart/form-data">
                     @csrf
                   
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                         <input type="text" name="name" value="{{$editProfile->name}}" class="form-control">
                         <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                         <input type="email" name="email" value="{{$editProfile->email}}" class="form-control">
                         <strong class="text-danger"> {{$errors->has('email') ? $errors->first('email') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Short Title</label>
                      <div class="col-sm-9">
                        <textarea rows="3" name="short_title" class="form-control" placeholder="Enter your title">{{$editProfile->short_title}}</textarea>
                         <strong class="text-danger"> {{$errors->has('short_title') ? $errors->first('short_title') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                         <input type="text" name="phone" value="{{$editProfile->phone}}" class="form-control">
                         <strong class="text-danger"> {{$errors->has('phone') ? $errors->first('phone') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Gender</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender">
                          <option>~~~ Select Gender ~~~</option>
                          <option value="Male" {{($editProfile->gender=="Male") ? "selected":""}} >Male</option>
                          <option value="Female" {{($editProfile->Femaletype=="Female") ? "selected":""}} >Female</option>
                          <strong class="text-danger"> {{$errors->has('gender') ? $errors->first('gender') : '' }} </strong>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                      	<input type="file" name="image" id="image">
                      </div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3 col-form-label"></label>
                    	<div class="col-sm-9">
                    		<img src="{{(!empty($editProfile->image))?url('public/upload/user_images/'.$editProfile->image):url('public/upload/no-image.png')}}" style="width: 100px; height: 100px; border: 1px solid #000;" id="showImage">
                    	</div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Update Profile Info">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

@endsection
