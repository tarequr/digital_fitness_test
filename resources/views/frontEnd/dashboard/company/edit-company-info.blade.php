@extends('frontEnd.dashboard.app')

@section('title')
Edit | Company-Info
@endsection


@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 p-2">
		 <form id="regForm" action="{{ route('company.info.update',$editCompany->id) }}"  method="POST">
			@csrf

		    @if(Session::get('message'))
		        <div class="alert alert-info alert-dismissible">
		          <button type="button" class="close" data-dismiss="alert">&times;</button>
		          <strong>{{ Session::get('message')}}</strong>
		        </div>
	      	@endif
		  <!-- One "tab" for each step in the form: -->
		  <div class="tab">
		  	<h3 class="text-center p-3" style="background-color: #abccca;">Edit Company Info:</h3><br><br>
		  </div>

		  <div class="tab">
		  	<b>1. What is your company registered name?</b>
		    <p><input placeholder="Company Name" oninput="this.className = '' "name="qtn_1" value="{{ $editCompany->qtn_1 }}" class="form-control"></p>
		  </div>

		  <div class="tab">
		  	<b>2. How long your company has been operating?</b>
		    <p>
		    	<select class="form-control" name="qtn_2">
		    		<option value="">Please select</option>
		    		<option value="1_year" {{($editCompany->qtn_2== '1_year') ? "selected":""}}>1 Year</option>
		    		<option value="2_year" {{($editCompany->qtn_2== '2_year') ? "selected":""}}>2 Year</option>
		    		<option value="3_year" {{($editCompany->qtn_2== '3_year') ? "selected":""}}>3 Year</option>
		    		<option value="4_year" {{($editCompany->qtn_2== '4_year') ? "selected":""}}>4 Year</option>
		    		<option value="5_year" {{($editCompany->qtn_2== '5_year') ? "selected":""}}>5 Year</option>
		    		<option value="6_year" {{($editCompany->qtn_2== '6_year') ? "selected":""}}>6 Year</option>
		    		<option value="7_year" {{($editCompany->qtn_2== '7_year') ? "selected":""}}>7 Year</option>
		    		<option value="8_year" {{($editCompany->qtn_2== '8_year') ? "selected":""}}>8 Year</option>
		    		<option value="9_year" {{($editCompany->qtn_2== '9_year') ? "selected":""}}>9 Year</option>
		    		<option value="10_year" {{($editCompany->qtn_2== '10_year') ? "selected":""}}>10 Year</option>
		    		<option value="11_year" {{($editCompany->qtn_2== '11_year') ? "selected":""}}>11 Year</option>
		    		<option value="12_year" {{($editCompany->qtn_2== '12_year') ? "selected":""}}>12 Year</option>
		    		<option value="13_year" {{($editCompany->qtn_2== '13_year') ? "selected":""}}>13 Year</option>
		    		<option value="14_year" {{($editCompany->qtn_2== '14_year') ? "selected":""}}>14 Year</option>
		    		<option value="15_year" {{($editCompany->qtn_2== '15_year') ? "selected":""}}>15 Year</option>
		    		<option value="16_year" {{($editCompany->qtn_2== '16_year') ? "selected":""}}>16 Year</option>
		    		<option value="17_year" {{($editCompany->qtn_2== '17_year') ? "selected":""}}>17 Year</option>
		    		<option value="18_year" {{($editCompany->qtn_2== '18_year') ? "selected":""}}>18 Year</option>
		    		<option value="19_year" {{($editCompany->qtn_2== '19_year') ? "selected":""}}>19 Year</option>
		    		<option value="20_year" {{($editCompany->qtn_2== '20_year') ? "selected":""}}>20 Year</option>
		    		<option value="21_year" {{($editCompany->qtn_2== '21_year') ? "selected":""}}>21 Year</option>
		    		<option value="22_year" {{($editCompany->qtn_2== '22_year') ? "selected":""}}>22 Year</option>
		    		<option value="23_year" {{($editCompany->qtn_2== '23_year') ? "selected":""}}>23 Year</option>
		    		<option value="24_year" {{($editCompany->qtn_2== '24_year') ? "selected":""}}>24 Year</option>
		    		<option value="25_year" {{($editCompany->qtn_2== '25_year') ? "selected":""}}>25 Year</option>
		    		<option value="26_year" {{($editCompany->qtn_2== '26_year') ? "selected":""}}>26 Year</option>
		    		<option value="27_year" {{($editCompany->qtn_2== '27_year') ? "selected":""}}>27 Year</option>
		    		<option value="28_year" {{($editCompany->qtn_2== '28_year') ? "selected":""}}>28 Year</option>
		    		<option value="29_year" {{($editCompany->qtn_2== '29_year') ? "selected":""}}>29 Year</option>
		    		<option value="30_year" {{($editCompany->qtn_2== '30_year') ? "selected":""}}>30 Year</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>3. Where your company located?</b> <br>
		  	<b style="font-style: italic;">State: </b>
		  	<p>
		    	<select class="form-control" name="qtn_3">
		    		<option value="">Please select</option>
		    		<option value="kl" {{($editCompany->qtn_3== 'kl') ? "selected":""}}>KL</option>
		    		<option value="selangor" {{($editCompany->qtn_3== 'selangor') ? "selected":""}}>Selangor</option>
		    		<option value="perlis" {{($editCompany->qtn_3== 'perlis') ? "selected":""}}>Perlis</option>
		    		<option value="kedah" {{($editCompany->qtn_3== 'kedah') ? "selected":""}}>Kedah</option>
		    		<option value="penang" {{($editCompany->qtn_3== 'penang') ? "selected":""}}>Penang</option>
		    		<option value="perak" {{($editCompany->qtn_3== 'perak') ? "selected":""}}>Perak</option>
		    		<option value="melaka" {{($editCompany->qtn_3== 'melaka') ? "selected":""}}>Melaka</option>
		    		<option value="ng_sembilan" {{($editCompany->qtn_3== 'ng_sembilan') ? "selected":""}}>Ng. Sembilan</option>
		    		<option value="johor" {{($editCompany->qtn_3== 'johor') ? "selected":""}}>Johor</option>
		    		<option value="pahang" {{($editCompany->qtn_3== 'pahang') ? "selected":""}}>Pahang</option>
		    		<option value="terengganu" {{($editCompany->qtn_3== 'terengganu') ? "selected":""}}>Terengganu</option>
		    		<option value="kelantan" {{($editCompany->qtn_3== 'kelantan') ? "selected":""}}>Kelantan</option>
		    		<option value="sabah" {{($editCompany->qtn_3== 'sabah') ? "selected":""}}>Sabah</option>
		    		<option value="sarawak" {{($editCompany->qtn_3== 'sarawak') ? "selected":""}}>Sarawak</option>
		    		<option value="labuan" {{($editCompany->qtn_3== 'labuan') ? "selected":""}}>Labuan</option>
		    		<option value="putrajaya" {{($editCompany->qtn_3== 'putrajaya') ? "selected":""}}>Putrajaya</option>
		    	</select>
			</p>
			<b style="font-style: italic;">Postcode: </b>
		    <p><input placeholder="Please enter" oninput="this.className = '' "name="qtn_4" value="{{ $editCompany->qtn_4 }}" class="form-control"></p>
		  </div>

		  <div class="tab">
		  	<b>4. What type of business your company is?</b>
		    <p>
		    	<select class="form-control" name="qtn_5">
					<option value="">Please select</option>
		    		<option value="solo_proprietor" {{($editCompany->qtn_5== 'solo_proprietor') ? "selected":""}}>Solo Proprietor</option>
		    		<option value="partnership" {{($editCompany->qtn_5== 'partnership') ? "selected":""}}>Partnership</option>
		    		<option value="limited_liability_partnership" {{($editCompany->qtn_5== 'limited_liability_partnership') ? "selected":""}}>Limited Liability Partnership (LLP)</option>
		    		<option value="private_limited_company" {{($editCompany->qtn_5== 'private_limited_company') ? "selected":""}}>Private Limited Company (sdn bhd)</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>5. What is your business activity?</b>
		    <p>
		    	<select class="form-control" name="qtn_6">
		    		<option value="">Please select</option>
		    		<option value="agriculture" {{($editCompany->qtn_6== 'agriculture') ? "selected":""}}>Agriculture</option>
		    		<option value="construction" {{($editCompany->qtn_6== 'construction') ? "selected":""}}>Construction</option>
		    		<option value="manufacturing" {{($editCompany->qtn_6== 'manufacturing') ? "selected":""}}>Manufacturing</option>
		    		<option value="mining_and_quarring" {{($editCompany->qtn_6== 'mining_and_quarring') ? "selected":""}}>Mining and Quarring</option>
		    		<option value="service" {{($editCompany->qtn_6== 'service') ? "selected":""}}>Service</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>6. What is your business industry?</b>
		    <p>
		    	<select class="form-control" name="qtn_7">
		    		<option value="">Please select</option>
		    		<option value="aerospace" {{($editCompany->qtn_7== 'aerospace') ? "selected":""}}>Aerospace</option>
		    		<option value="automotive" {{($editCompany->qtn_7== 'automotive') ? "selected":""}}>Automotive</option>
		    		<option value="Defence" {{($editCompany->qtn_7== 'Defence') ? "selected":""}}>Defence</option>
		    		<option value="food_&_drink" {{($editCompany->qtn_7== 'food_&_drink') ? "selected":""}}>Food & Drink</option>
		    		<option value="furniture" {{($editCompany->qtn_7== 'furniture') ? "selected":""}}>Furniture</option>
		    		<option value="general_engineering" {{($editCompany->qtn_7== 'general_engineering') ? "selected":""}}>General Engineering</option>
		    		<option value="nuclear" {{($editCompany->qtn_7== 'nuclear') ? "selected":""}}>Nuclear</option>
		    		<option value="oil_&_gas" {{($editCompany->qtn_7== 'oil_&_gas') ? "selected":""}}>Oil & Gas</option>
		    		<option value="securities" {{($editCompany->qtn_7== 'securities') ? "selected":""}}>Securities</option>
		    		<option value="space" {{($editCompany->qtn_7== 'space') ? "selected":""}}>Space</option>
		    		<option value="telecommunication" {{($editCompany->qtn_7== 'telecommunication') ? "selected":""}}>Telecommunication</option>
		    		<option value="civil_engineering" {{($editCompany->qtn_7== 'civil_engineering') ? "selected":""}}>Civil Engineering</option>
		    		<option value="textile" {{($editCompany->qtn_7== 'textile') ? "selected":""}}>Textile</option>
		    		<option value="electrical_&_electronic_engineering" {{($editCompany->qtn_7== 'electrical_&_electronic_engineering') ? "selected":""}}>Electrical & Electronic Engineering</option>
		    		<option value="industrial_gas_&_turbine" {{($editCompany->qtn_7== 'industrial_gas_&_turbine') ? "selected":""}}>Industrial Gas & Turbine</option>
		    		<option value="rail" {{($editCompany->qtn_7== 'rail') ? "selected":""}}>Rail</option>
		    		<option value="marine" {{($editCompany->qtn_7== 'marine') ? "selected":""}}>Marine</option>
		    		<option value="petrochemical" {{($editCompany->qtn_7== 'petrochemical') ? "selected":""}}>Petrochemical</option>
		    		<option value="medical" {{($editCompany->qtn_7== 'medical') ? "selected":""}}>Medical</option>
		    		<option value="maritime_system" {{($editCompany->qtn_7== 'maritime_system') ? "selected":""}}>Maritime System</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>7. How many percent of your company equity is owned by Malaysian?</b>
		    <p>
		    	<select class="form-control" name="qtn_8">
		    		<option value="">Please select</option>
		    		<option value="less_than_50%" {{($editCompany->qtn_8== 'less_than_50%') ? "selected":""}}>Less than 50%</option>
		    		<option value="50%-60%" {{($editCompany->qtn_8== '50%-60%') ? "selected":""}}>50% to 60%</option>
		    		<option value="more_than_60%" {{($editCompany->qtn_8== 'more_than_60%') ? "selected":""}}>More than 60%</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>8. How many paid worker are helping you in your business?</b>
		    <p>
		    	<select class="form-control" name="qtn_9">
		    		<option value="">Please select</option>
		    		<option value="less_than_5" {{($editCompany->qtn_9== 'less_than_5') ? "selected":""}}>Less than 5</option>
		    		<option value="5-30" {{($editCompany->qtn_9== '5-30') ? "selected":""}}>5 – 30</option>
		    		<option value="31-75" {{($editCompany->qtn_9== '31-75') ? "selected":""}}>31 – 75</option>
		    		<option value="more_than_75" {{($editCompany->qtn_9== 'more_than_75') ? "selected":""}}>More than 75</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>9. Any staff changes in previous 12 months?</b>
		    <p>
		    	<select class="form-control" name="qtn_10">
		    		<option value="">Please select</option>
		    		<option value="increase" {{($editCompany->qtn_10== 'increase') ? "selected":""}}>Increase</option>
		    		<option value="decrease" {{($editCompany->qtn_10== 'decrease') ? "selected":""}}>Decrease</option>
		    		<option value="no_change" {{($editCompany->qtn_10== 'no_change') ? "selected":""}}>No Change</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>10. What is the percentage changes on the staff you have?</b>
		    <p>
		    	<select class="form-control" name="qtn_11">
		    		<option value="">Please select</option>
		    		<option value="less_than_30%" {{($editCompany->qtn_11== 'less_than_30%') ? "selected":""}}>Less than 30%</option>
		    		<option value="30%-50%" {{($editCompany->qtn_11== '30%-50%') ? "selected":""}}>30%-50%</option>
		    		<option value="more_than_50%" {{($editCompany->qtn_11== 'more_than_50%') ? "selected":""}}>More than 50%</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>11. How much is your company’s paid up capital?</b>
		    <p>
		    	<select class="form-control" name="qtn_12">
		    		<option value="">Please select</option>
		    		<option value="less_than_RM50K" {{($editCompany->qtn_12== 'less_than_RM50K') ? "selected":""}}>Less than RM50K</option>
		    		<option value="more_than_RM50K" {{($editCompany->qtn_12== 'more_than_RM50K') ? "selected":""}}>More than RM50K</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>12. How much your company earn last year? (Gross Revenue)</b>
		    <p>
		    	<select class="form-control" name="qtn_13">
		    		<option value="">Please select</option>
		    		<option value="less_than_RM300K" {{($editCompany->qtn_13== 'less_than_RM300K') ? "selected":""}}>Less than RM300K</option>
		    		<option value="more_than_RM300K" {{($editCompany->qtn_13== 'more_than_RM300K') ? "selected":""}}>More than RM300K</option>
		    	</select>
			</p>
		  </div>

		  <div class="tab">
		  	<b>13. In the last 24 months, did your company implement any new digital processes or solutions? 
			</b><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="qtn_14" value="yes" style="width: 4%" {{($editCompany->qtn_14== 'yes') ? "checked":""}}>
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="qtn_14" value="no" style="width: 4%" {{($editCompany->qtn_14== 'no') ? "checked":""}}>
				<label for="no">No</label>
		    </p>
		  </div>

		  <div class="tab">
		  	<b>Did it sustain or grow your business? 
			</b><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="qtn_15" value="yes" style="width: 4%" {{($editCompany->qtn_15== 'yes') ? "checked":""}}>
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="qtn_15" value="no" style="width: 4%" {{($editCompany->qtn_15== 'no') ? "checked":""}}>
				<label for="no">No</label>
		    </p>
		  </div>

		  <div class="tab">
		  	<b>Do you give regular training and development to your workers? </b><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="qtn_21" value="yes" style="width: 2%" {{($editCompany->qtn_21== 'yes') ? "checked":""}}>
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="qtn_21" value="no" style="width: 2%" {{($editCompany->qtn_21== 'no') ? "checked":""}}>
				<label for="no">No</label>
		    </p>
		  </div>

		  <div class="tab">
		  	<b>Do you always review your workers’ performance in work? </b><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="qtn_22" value="yes" style="width: 2%" {{($editCompany->qtn_22== 'yes') ? "checked":""}}>
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="qtn_22" value="no" style="width: 2%" {{($editCompany->qtn_22== 'no') ? "checked":""}}>
				<label for="no">No</label>
		    </p>
		  </div>

		  <div class="tab">
		  	<b>Do you always try to improve your employees’ engagement? </b><br><br>
		    <p class="text-center">
		    	<input type="radio" id="yes" name="qtn_23" value="yes" style="width: 2%" {{($editCompany->qtn_23== 'yes') ? "checked":""}}>
				<label for="yes">Yes</label><br>
				<input type="radio" id="no" name="qtn_23" value="no" style="width: 2%" {{($editCompany->qtn_23== 'no') ? "checked":""}}>
				<label for="no">No</label>
		    </p>
		  </div>

		  <div style="overflow:auto;">
		    <div>
		      <button type="submit" class="btn btn-success btn-block">Update company info</button>
		    </div>
		  </div>

		  </div>
		</form>
		</div>
	</div>
</div>
@endsection

