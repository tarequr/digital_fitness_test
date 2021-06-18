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
            <th>SL</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Title</th>
            <th>Designation</th>
            <th>Join Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Title</th>
            <th>Designation</th>
            <th>Join Date</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($users as $user)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ ucwords(str_replace('_',' ',$user->title)) }}</td>
            <td>{{ $user->designation }}</td>
            <td>{{ date('d-M-Y',strtotime($user->created_at)) }}</td>
            <td width="15%">
              <a href="{{ route('users.company.view',$user->id)}}" class="btn btn-info btn-sm" title="Company Info">Company Info</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection