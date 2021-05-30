@extends('backEnd.master')

@section('title')
Business-Type | View
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('business.type.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Business Type</a>
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
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Business Type</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($businessTypes as $businessType)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $businessType->name }}</td>
            <td width="12%">
              <a href="{{ route('business.type.edit',$businessType->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>

              <a href="{{ route('business.type.delete',$businessType->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection