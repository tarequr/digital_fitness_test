@extends('frontEnd.dashboard.app')

@section('title')
User | Recommendation
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Recommendation</li>
        </ol>
        <h4>Your recommendation information</h4><br>
        <table class="table table-bordered" width="100%">
        	<tr>
        		<th>SL</th>
	        	<th>Section</th>
	        	<th>Mark</th>
        	</tr>
        	@php $key = 0; @endphp
        	<tr>
        		<td>{{ $key+1 }}</td>
        		<td>{{ $recommendation['section']['name'] }}</td>
                <td>{{ $recommendation->marks }}</td>
        	</tr>
        </table>
        <p style="display: none;">{{ $floatMark = ($recommendation->marks / $questionTotalMark)*100 }}</p>
        <p style="display: none;">{{ $recommendationMark = intval($floatMark) }}</p>
        

        <p>Your recommendation below here.</p>

        @if($recommendationMark >= 80 && $recommendationMark <= 100)
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>Good Student</strong>
        </div>
        @elseif($recommendationMark >= 50 && $recommendationMark <= 79)
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>Medium Student</strong>
        </div>
        @elseif($recommendationMark >= 5 && $recommendationMark <= 49)
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>Bad Student</strong>
        </div>
        @endif
        
    </div>
</main>
@endsection