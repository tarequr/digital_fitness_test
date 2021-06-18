@extends('frontEnd.dashboard.app')

@section('title')
User | Dashboard
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-md-6">
                <h4>Hey, <span>{{ Auth::user()->name }}</span></h4>
                <p>Your answer information</p><br>
            </div>
            <div class="col-md-6">
                <a href="{{ route('retake.business.type') }}" class="btn btn-primary float-right">Retake Survey</a>
            </div>
        </div>      
        <table class="table table-bordered" width="100%">
        	<tr>
        		<th>SL</th>
	        	<th>Section</th>
	        	<th>Recommendation</th>
        	</tr>
        	@foreach($answers as $key => $answer)
        	<tr>
        		<td>{{ $key+1 }}</td>
        		<td>{{ $answer['section']['name'] }}</td>
                <td width="25%"><a href="{{ route('user.view.recommendation',$answer->section_id) }}" class="btn btn-info">View recommendation</a></td>
        	</tr>
        	@endforeach
        </table>
    </div>
</main>
@endsection