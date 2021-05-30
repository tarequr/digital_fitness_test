@extends('backEnd.master')

@section('title')
{{(@$editQuestion)?'Update | Question':'Add | Question'}}
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6"></div>
      <div class="col-sm-6">
        <a href="{{route('question.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage Question</a>
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
                      @if(isset($editQuestion))
                      Update Question!
                      @else
                      Add Question!
                      @endif
                    </h1>
                  </div>
                  <form class="user" method="POST" 
                  action="{{ (@$editQuestion)?route('question.update',$editQuestion->id):route('question.save') }}" enctype="multipart/form-data">
                     @csrf

                   <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Section</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="section_name">
                          <option value="">Please select</option>
                          @foreach($sections as $section)
                          <option value="{{$section->id}}" {{(@$editQuestion->businessTypeId == $section->id) ? "selected" : ""}}>{{$section->name}}</option>
                          @endforeach
                        </select>
                        <strong class="text-danger"> {{$errors->has('section_name') ? $errors->first('section_name') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Question Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{@$editQuestion->name}}" class="form-control" placeholder="Write Question Name">
                        <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="{{(@$editQuestion)?'Update Question':'Save Question'}}">
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
