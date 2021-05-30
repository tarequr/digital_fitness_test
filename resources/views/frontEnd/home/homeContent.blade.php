@extends('frontEnd.master')

@section('title')
Home Page
@endsection

@section('content')
<div class="container">
    <div class="card" style="margin-top: 200px;">
        <div class="card-body" style="text-align: center;">
            <a href="{{ route('user.info') }}" class="btn btn-success btn-block">Get Started</a>
        </div>
    </div>
</div>
@endsection