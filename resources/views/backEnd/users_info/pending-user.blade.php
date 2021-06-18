@extends('backEnd.master')

@section('title')
Pending | Users
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
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
            <th>User Type</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Join Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>User Type</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Join Date</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($users as $user)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ ucwords($user->user_type) }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ date('d-M-Y',strtotime($user->created_at)) }}</td>
            <td width="10%">
              <a href="{{ route('users.pending.delte',$user->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection