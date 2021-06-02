@extends('frontEnd.master')

@section('title','Company | Info')

@push('css')
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')
	<form id="regForm" action="{{ route('company.info.store') }}"  method="POST">
		@csrf

		<input type="hidden" name="id" value="{{ $user->id }}">

	  <h1 class="pb-4">Company Info:</h1>

	    @if(Session::get('message'))
	        <div class="alert alert-success alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert">&times;</button>
	          <strong>{{ Session::get('message')}}</strong>
	        </div>
      	@endif
      	@if(Session::get('error'))
	        <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert">&times;</button>
	          <strong>{{ Session::get('message')}}</strong>
	        </div>
      	@endif
	  <!-- One "tab" for each step in the form: -->
	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">We would like to know about your business!</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="Company Name" oninput="this.className = '' "name="qtn_1"></p>
	  </div>

	  <div class="tab">
	  	<b>What type of business your company is?</b>
	    <p>
	    	<select class="form-control" name="qtn_2">
				<option value="">Please select</option>
	    		<option value="solo_proprietor">Solo Proprietor</option>
	    		<option value="partnership">Partnership</option>
	    		<option value="limited_liability_partnership">Limited Liability Partnership (LLP)</option>
	    		<option value="private_limited_company">Private Limited Company (Sdn Bhd)</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>What is your business activity?</b>
	    <p>
	    	<select class="form-control" name="qtn_3">
	    		<option value="">Please select</option>
	    		<option value="agriculture">Agriculture</option>
	    		<option value="construction">Construction</option>
	    		<option value="manufacturing">Manufacturing</option>
	    		<option value="mining_and_quarring">Mining and Quarring</option>
	    		<option value="service">Service</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>What is your business industry?</b>
	    <p>
	    	<select class="form-control" name="qtn_4">
	    		<option value="">Please select</option>
	    		<option value="aerospace">Aerospace</option>
	    		<option value="automotive">Automotive</option>
	    		<option value="Defence">Defence</option>
	    		<option value="food_&_drink">Food & Drink</option>
	    		<option value="furniture">Furniture</option>
	    		<option value="general_engineering">General Engineering</option>
	    		<option value="nuclear">Nuclear</option>
	    		<option value="oil_&_gas">Oil & Gas</option>
	    		<option value="securities">Securities</option>
	    		<option value="space">Space</option>
	    		<option value="telecommunication">Telecommunication</option>
	    		<option value="civil_engineering">Civil Engineering</option>
	    		<option value="textile">Textile</option>
	    		<option value="electrical_&_electronic_engineering">Electrical & Electronic Engineering</option>
	    		<option value="industrial_gas_&_turbine">Industrial Gas & Turbine</option>
	    		<option value="rail">Rail</option>
	    		<option value="marine">Marine</option>
	    		<option value="petrochemical">Petrochemical</option>
	    		<option value="medical">Medical</option>
	    		<option value="maritime_system">Maritime System</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How long your company has been operating?</b>
	    <p>
	    	<select class="form-control" name="qtn_5">
	    		<option value="">Please select</option>
	    		<option value="1_year">1 Year</option>
	    		<option value="2_year">2 Year</option>
	    		<option value="3_year">3 Year</option>
	    		<option value="4_year">4 Year</option>
	    		<option value="5_year">5 Year</option>
	    		<option value="6_year">6 Year</option>
	    		<option value="7_year">7 Year</option>
	    		<option value="8_year">8 Year</option>
	    		<option value="9_year">9 Year</option>
	    		<option value="10_year">10 Year</option>
	    		<option value="11_year">11 Year</option>
	    		<option value="12_year">12 Year</option>
	    		<option value="13_year">13 Year</option>
	    		<option value="14_year">14 Year</option>
	    		<option value="15_year">15 Year</option>
	    		<option value="16_year">16 Year</option>
	    		<option value="17_year">17 Year</option>
	    		<option value="18_year">18 Year</option>
	    		<option value="19_year">19 Year</option>
	    		<option value="20_year">20 Year</option>
	    		<option value="21_year">21 Year</option>
	    		<option value="22_year">22 Year</option>
	    		<option value="23_year">23 Year</option>
	    		<option value="24_year">24 Year</option>
	    		<option value="25_year">25 Year</option>
	    		<option value="26_year">26 Year</option>
	    		<option value="27_year">27 Year</option>
	    		<option value="28_year">28 Year</option>
	    		<option value="29_year">29 Year</option>
	    		<option value="30_year">30 Year</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Where your company located?</b>
	  	<span>State</span>
	  	<p>
	    	<select class="form-control" name="qtn_6">
	    		<option value="">Please select</option>
	    		<option value="kl">KL</option>
	    		<option value="selangor">Selangor</option>
	    		<option value="perlis">Perlis</option>
	    		<option value="kedah">Kedah</option>
	    		<option value="penang">Penang</option>
	    		<option value="perak">Perak</option>
	    		<option value="melaka">Melaka</option>
	    		<option value="ng_sembilan">Ng. Sembilan</option>
	    		<option value="johor">Johor</option>
	    		<option value="pahang">Pahang</option>
	    		<option value="terengganu">Terengganu</option>
	    		<option value="kelantan">Kelantan</option>
	    		<option value="sabah">Sabah</option>
	    		<option value="sarawak">Sarawak</option>
	    		<option value="labuan">Labuan</option>
	    		<option value="putrajaya">Putrajaya</option>
	    	</select>
		</p>
		<span>Postcode</span>
	    <p><input placeholder="Please enter" oninput="this.className = '' "name="qtn_7"></p>
	  </div>

	  <div class="tab">
	  	<b>How many paid worker are helping you in your business?</b>
	    <p>
	    	<select class="form-control" name="qtn_8">
	    		<option value="">Please select</option>
	    		<option value="<5">Less than 5</option>
	    		<option value="5-30">5 – 30</option>
	    		<option value="31-75">31 – 75</option>
	    		<option value=">75">More than 75</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How much is your company’s paid up capital?</b>
	    <p>
	    	<select class="form-control" name="qtn_9">
	    		<option value="">Please select</option>
	    		<option value="<RM50K">Less than RM50K</option>
	    		<option value=">RM50K">More than RM50K</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How much your company earn last year? (Gross Revenue)</b>
	    <p>
	    	<select class="form-control" name="qtn_10">
	    		<option value="">Please select</option>
	    		<option value="<RM300K">Less than RM300K</option>
	    		<option value=">RM300K">More than RM300K</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Did your company register in SSM or other equivalent bodies?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_11" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_11" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>How many percent of your company equity is owned by Malaysian?</b>
	    <p>
	    	<select class="form-control" name="qtn_12">
	    		<option value="">Please select</option>
	    		<option value="<50%">Less than 50%</option>
	    		<option value="50%-60%">50% to 60%</option>
	    		<option value=">60%">More than 60%</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Does your company has a SME Status Certificate from SMECorp?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_13" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_13" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company done the SCORE/M-CORE assessment from SMECorp Malaysia?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_14" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_14" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company received any grants or incentives from government previously?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_15" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_15" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>What is the government agency your company receive the grants/incentives from?</b>
	    <p>
	    	<select class="form-control" name="qtn_16">
	    		<option value="">Please select</option>
	    		<option value="mtdc">MTDC</option>
	    		<option value="mdec">MDEC</option>
	    		<option value="smecorp">SMECORP</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">What is your business pain
			point? We are here to listen to you.</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>In the last 24 months, did your company implement any new digital processes or solutions? 
		</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_17" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_17" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Do you think your company will be increasing its digital transformation efforts or adopt more digital solutions in the next 12 months? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_18" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_18" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>What challenges do you encounter in your efforts to digitally transform the business and/or to adopt digital solutions? </b><br><br>
	    <p class="text-center">
	    	<input type="checkbox" id="" name="qtn_19[]" value="1" style="width: 2%">
			<label for="">Company does not see a need for a digital strategy and digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="2" style="width: 2%">
			<label for="">Company does not know how to start planning and implementing a digital strategy</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="3" style="width: 2%">
			<label for="">Lack of a long-term company digital strategy and/or Management support</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="4" style="width: 2%">
			<label for="">Lack of budget</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="5" style="width: 2%">
			<label for="">Hoping to find alternative financing options such as grants and loans to start digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="6" style="width: 2%">
			<label for="">Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="7" style="width: 2%">
			<label for="">Too many government regulations and other types external approvals when implementing digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="8" style="width: 2%">
			<label for="">Lack of internal talents to implement, support and operate the digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="9" style="width: 2%">
			<label for="">Other (Please Specify):</label><br>
	    </p>
	  </div>
	  
	  <div class="tab">
	  	<b>Reason why NOT increasing its digital transformation efforts or adopt more digital solutions in the next 12 months? </b><br><br>
	    <p class="text-center">
	    	<input type="checkbox" id="" name="qtn_20[]" value="1" style="width: 2%">
			<label for="">Lack of budget and/or Reallocation of budget</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="2" style="width: 2%">
			<label for="">Lack of internal talents to implement, support and operate the digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="3" style="width: 2%">
			<label for="">Lack of a long-term company digital strategy and/or Management support</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="4" style="width: 2%">
			<label for="">Too many government regulations and other types external approvals when implementing digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="5" style="width: 2%">
			<label for="">Hoping to find alternative financing options such as grants and loans to start digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="6" style="width: 2%">
			<label for="">Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="7" style="width: 2%">
			<label for="">Other (Please Specify):</label><br>
	    </p>
	  </div>

	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">We would like to understand your company’s digital infrastructure and readiness</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>Do you give regular training and development to your workers? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_21" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_21" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Do you always review your workers’ performance in work? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_22" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_22" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Do you always try to improve your employees’ engagement? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_23" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_23" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <!-- <div class="tab">Birthday:
	    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
	    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
	    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
	  </div>
	  <div class="tab">Login Info:
	    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
	    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
	  </div> -->

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
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
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