@extends('frontEnd.master')

@section('title')
Home Page
@endsection

@section('content')
<div class="container">
    <div class="card" style="margin-top: 200px;">
        <div class="card-body" style="text-align: center;">
            <h3>Please select any busines type.</h3><br>
            <div class="row">
                @foreach($businessTypes as $business)
                <div class="col-md-6">
                    <a href="{{ route('business.wise.questions',$business->id) }}" class="btn btn-info btn-block" style="margin-bottom: 5px; border-radius: 20px;">{{ $business->name }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection