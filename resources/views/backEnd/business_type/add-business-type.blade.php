@extends('backEnd.master')

@section('title')
{{ (@$editBusinessType)?'Update | Business-Type':'Add | Business-Type' }}
@endsection

@section('content')
  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('business.type.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage Business-Type</a>
    </div>
  </div><br>
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      @if(isset($editBusinessType))
                      Update Business Type!
                      @else
                      Add Business Type!
                      @endif
                    </h1>
                  </div>
                  <form class="user" method="POST" action="
                  {{ (@$editBusinessType)?route('business.type.update',$editBusinessType->id):route('business.type.save') }}">
                     @csrf

                   <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Business Type</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{@$editBusinessType->name}}" class="form-control" placeholder="Write Business Type">
                        <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="{{(@$editBusinessType)?'Update Business Type':'Save Business Type'}}">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
