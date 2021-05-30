@extends('backEnd.master')

@section('title')
{{(@$editSection)?'Update | Section':'Add | Section'}}
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6"></div>
      <div class="col-sm-6">
        <a href="{{route('section.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage Section</a>
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
                      @if(isset($editSection))
                      Update Section!
                      @else
                      Add Section!
                      @endif
                    </h1>
                  </div>
                  <form class="user" method="POST" 
                  action="{{ (@$editSection)?route('section.update',$editSection->id):route('section.save') }}" enctype="multipart/form-data">
                     @csrf

                   <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Business Type</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="business_type">
                          <option value="">Please select</option>
                          @foreach($businessTypes as $business)
                          <option value="{{$business->id}}" {{(@$editSection->businessTypeId == $business->id) ? "selected" : ""}}>{{$business->name}}</option>
                          @endforeach
                        </select>
                        <strong class="text-danger"> {{$errors->has('business_type') ? $errors->first('business_type') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Section Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{@$editSection->name}}" class="form-control" placeholder="Write Section Name">
                        <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="{{(@$editSection)?'Update Section':'Save Section'}}">
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
