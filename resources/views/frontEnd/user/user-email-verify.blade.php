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
              <div class="p-2">
                <div class="text txt-center">
                  @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>{{ Session::get('success')}}</strong>
                    </div>
                  @endif
                  @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>{{ Session::get('error')}}</strong>
                    </div>
                  @endif
                </div><br>
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">E-mail Verify</h1>
                </div>
                <form class="user" method="POST" action="{{ route('verify.save') }}">
                  @csrf
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" value="{{old('email')}}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    @if ($errors->has('email'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="text" name="code" class="form-control form-control-user" id="exampleInputPassword" placeholder="Verify code">
                    @if ($errors->has('code'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('code') }}</strong>
                      </span>
                    @endif
                  </div>
                  <input type="submit" class="btn btn-primary btn-user btn-block" name="btn" value="Verify e-mail">
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection