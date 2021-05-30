@extends('backEnd.master')

@section('title')
Question | View
@endsection

@section('content')
<div class="card shadow mb-4">
<div class="card-body">
  <a href="{{route('question.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Question</a>
  <div class="table-responsive">
    <div class="text-center">
      @if(Session::get('message'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{{ Session::get('message')}}</strong>
        </div>
      @endif
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Business Type</th>
          <th>Section Name</th>
          <th>Question</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Sl No</th>
          <th>Business Type</th>
          <th>Section Name</th>
          <th>Question</th>
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
        <?php $i=1;  ?>
        @foreach($questions as $question)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $question['businessType']['name'] }}</td>
          <td>{{ $question['section']['name'] }}</td>
          <td>{{ $question->name }}</td>
          <td width="13%">
            <a href="{{ route('question.edit',$question->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
            <a href="{{ route('question.delete',$question->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection