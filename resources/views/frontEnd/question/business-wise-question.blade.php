@extends('frontEnd.master')

@section('title','Company | Info')

@push('css')
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')

@if($questionCount>0)
	<form id="regForm" action="{{ route('business.questions.store') }}"  method="POST">
		@csrf

	  <h1 class="pb-4">Please fill this question</h1>

	  <!-- One "tab" for each step in the form: -->
		@foreach($questions as $question)
		  <div class="tab">
		  	<span class="text-center">{{ $question->name }}</span><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="answer[{{ $question->id }}]" value="1" style="width: 2%">
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="answer[{{ $question->id }}]" value="0" style="width: 2%">
				<label for="no">No</label>
		    </p>
		  </div>
	  	@endforeach

	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	    </div>
	  </div>


	  <!-- Circles which indicates the steps of the form: -->
	  <div style="text-align:center;margin-top:40px;">
	  	@for ($i=0; $i < $questionCount ; $i++) 
	    <span class="step"></span>
	    @endfor	    
	  </div>
	  
	</form>
@else
<div class="card">
	<div class="card-header">
		<h3 class="text-center text-danger">Sorry! no question avaiable here.</h3>
	</div>
</div>
@endif
@endsection


@push('js')
	<script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush