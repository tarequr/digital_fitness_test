@extends('frontEnd.master')

@section('title')
User | Permission
@endsection

@section('content')
<div class="container">
    <div class="card" style="margin-top: 200px;">
      <div class="text-center">
        @if(Session::get('message'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ Session::get('message')}}</strong>
          </div>
        @endif
      </div>
        <div class="card-body" style="text-align: center;">
            <div style="width: 60%; margin: auto;">
              <h3 class="text-center" style="color: #9f14b9">Do you want to see your result?</h3>
              <p>please <a href="{{ route('user.upate') }}">click here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection