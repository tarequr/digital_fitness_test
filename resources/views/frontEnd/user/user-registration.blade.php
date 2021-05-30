@extends('frontEnd.master')

@section('title','User | Registration')

@push('css')
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')
    <form id="regForm" method="POST" action="{{ route('user.info.store') }}" >
        @csrf
      <h1>Your Information:</h1>
      <!-- One "tab" for each step in the form: -->

      <div class="tab">
        <b>Please enter your title.</b>
        <p>
            <select class="form-control" name="title">
                <option value="">please select title</option>
                <option value="tan_sri">Tan Sri</option>
                <option value="puan_sri">Puan Sri</option>
                <option value="dato_seri">Dato' Seri</option>
                <option value="datin_seri">Datin' Seri</option>
                <option value="dato">Dto'</option>
                <option value="datuk">Datuk</option>
                <option value="datin">Datin</option>
                <option value="prof">Prof</option>
                <option value="dr">Dr</option>
                <option value="ir">Ir</option>
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="ms">Ms</option>
            </select>
        </p>
      </div>

      <div class="tab">
        <b>Please enter your full name</b>
        <p><input type="text" name="name" oninput="this.className = ''" placeholder="Enter your full name" value="{{ old('name') }}" /></p>
        <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please enter your emil</b>
        <p><input type="email" name="email" oninput="this.className = ''" placeholder="Enter your email" value="{{ old('email') }}" /></p>
        <strong class="text-danger"> {{$errors->has('email') ? $errors->first('email') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please enter your phone number</b>
        <p><input type="text" name="phone" oninput="this.className = ''" placeholder="Enter your phone number" value="{{ old('phone') }}" /></p>
        <strong class="text-danger"> {{$errors->has('phone') ? $errors->first('phone') : '' }} </strong>
      </div>

      <div class="tab">
        <b>How did you get to know about Grants Access Processing (GAP) Diagnostic?</b>
        <p>
            <select class="form-control" name="grants_access">
                <option value="">please select grants access</option>
                <option value="daily_website">The SME Daily Website</option>
                <option value="masterclass_website">SME Masterclass Website</option>
                <option value="direct_mailer">Direct Mailer(EDM)</option>
                <option value="friends_colleagues">Friends or Colleagues</option>
                <option value="social_media">Social Media</option>
                <option value="media_coverage">Media Coverage</option>
                <option value="events">Events</option>
            </select>
        </p>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        
      </div>
    </form>
@endsection


@push('js')
    <script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush