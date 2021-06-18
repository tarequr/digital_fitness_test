@extends('frontEnd.master')

@section('title')
User | Update
@endsection

@section('content')
<div class="container">
    <div class="card" style="margin-top: 200px;">
      <div class="text-center">
        @if(Session::get('message'))
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ Session::get('message')}}</strong>
          </div>
        @endif
      </div>
        <div class="card-body" style="text-align: center;">
            <div style="width: 50%; margin: auto;">
              <div class="p-3">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Please complete registration info!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('user.signup',$user->id) }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ $user->email }}">
                      @if ($errors->has('email'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      @if ($errors->has('password'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="btn" value="Submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection