@extends('backEnd.master')

@section('title')
Users
@endsection

@section('content')

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <strong class="text-center text-success"> {{ Session::get('message')}} </strong>
                    <strong class="text-center text-danger"> {{ Session::get('error')}} </strong>
                    <h1 class="h4 text-gray-900 mb-4">Change Password!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('profiles.password.update') }}">
                     @csrf
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Current Password</label>
                      <div class="col-sm-8">
                         <input type="password" name="currentPassword" class="form-control">
                         <strong class="text-danger"> {{$errors->has('currentPassword') ? $errors->first('currentPassword') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">New Password</label>
                      <div class="col-sm-8">
                         <input type="password" name="newPassword" class="form-control">
                         <strong class="text-danger"> {{$errors->has('newPassword') ? $errors->first('newPassword') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Confirm Password</label>
                      <div class="col-sm-8">
                         <input type="password" name="confirmPassword" class="form-control">
                         <strong class="text-danger"> {{$errors->has('confirmPassword') ? $errors->first('confirmPassword') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-8">
                        <input type="submit" name="btn" class="btn btn-info btn-user btn-block" value="Update Password">
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
