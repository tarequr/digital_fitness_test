@extends('frontEnd.master')

@section('title')
Home Page
@endsection

@section('content')
<div class="container">
    <div class="card" style="margin-top: 200px;">
    	<div class="text-center">
	      @if(Session::get('error'))
	        <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert">&times;</button>
	          <strong>{{ Session::get('message')}}</strong>
	        </div>
	      @endif
	    </div>
        <div class="card-body" style="text-align: center;">
            <a href="{{ route('user.info') }}" class="btn btn-success btn-block">Get Started</a>
        </div>
    </div>
</div>
@endsection