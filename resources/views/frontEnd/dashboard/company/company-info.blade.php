@extends('frontEnd.dashboard.app')

@section('title')
View | Company-Info
@endsection

@section('content')
@section('content')
<div class="card shadow mb-4">
  <div class="card-body row">
    <div class="col-md-6">
     <h2>Hey,</h2>
      <h3>{{ $company_info->user->name }}</h3>
      <p>Your compnay information here</p> 
    </div>
    <div class="col-md-6">
      <a href="{{ route('company.info.edit',$company_info->id) }}" class="btn btn-primary float-right">
        <i class="fa fa-edit"></i> Edit Company Info</a>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>User Company Info</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <h5>What is your company registered name?</h5>
              <p><b>Ans: </b>{{ ucwords($company_info->qtn_1) }}</p>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>
              <h5>How long your company has been operating?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_2)) }}</p>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>
              <h5>Where is your company located?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_3)) }}</p>
              <h5>Postcode.</h5>
              <p><b>Ans: </b>{{ $company_info->qtn_4 }}</p>
            </td>
          </tr>

           <tr>
            <td>4</td>
            <td>
              <h5>What type of business your company is?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_5)) }}</p>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>
              <h5>What is your business activity?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_6)) }}</p>
            </td>
          </tr>

          <tr>
            <td>6</td>
            <td>
              <h5>What is your business industry?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_7)) }}</p>
            </td>
          </tr>

          <tr>
            <td>7</td>
            <td>
              <h5>How many percent of your company equity is owned by Malaysian?</h5>
              <p><b>Ans: </b>{{ $company_info->qtn_8 }}</p>
            </td>
          </tr>

          <tr>
            <td>8</td>
            <td>
              <h5>How many paid worker are helping you in your business?</h5>
              <p><b>Ans: </b>{{ $company_info->qtn_9 }}</p>
            </td>
          </tr>

          <tr>
            <td>9</td>
            <td>
              <h5>Any staff changes in previous 12 months?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_10)) }}</p>
            </td>
          </tr>

          <tr>
            <td>10</td>
            <td>
              <h5>What is the percentage changes on the staff you have?</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_11)) }}</p>
            </td>
          </tr>

          <tr>
            <td>11</td>
            <td>
              <h5>How much is your company’s paid up capital?</h5>              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_12)) }}</p>
            </td>
          </tr>

          <tr>
            <td>12</td>
            <td>
              <h5>How much your company earn last year? (Gross Revenue)</h5>
              <p><b>Ans: </b>{{ ucwords(str_replace('_',' ',$company_info->qtn_13)) }}</p>
            </td>
          </tr>

          <tr>
            <td>13</td>
            <td>
              <h5>In the last 24 months, did your company implement any new digital processes or solutions?</h5>
              @if($company_info->qtn_14 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr>

          <tr>
            <td>14</td>
            <td>
              <h5>Did it sustain or grow your business?</h5>
              @if($company_info->qtn_15 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr>

          <!-- <tr>
            <td>10</td>
            <td>
              <h5>Did your company register in SSM or other equivalent bodies?</h5>
              @if($company_info->qtn_11 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr> -->

          <!-- <tr>
            <td>12</td>
            <td>
              <h5>Does your company has a SME Status Certificate from SMECorp?</h5>
              @if($company_info->qtn_13 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr> -->
          <!-- <tr>
            <td>13</td>
            <td>
              <h5>Has your company done the SCORE/M-CORE assessment from SMECorp Malaysia?</h5>
              @if($company_info->qtn_14 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr> -->
          <!-- <tr>
            <td>14</td>
            <td>
              <h5>Has your company received any grants or incentives from government previously?</h5>
              @if($company_info->qtn_15 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr> -->
          <!-- <tr>
            <td>15</td>
            <td>
              <h5>What is the government agency your company receive the grants/incentives from?</h5>
              <p><b>Ans: </b>{{ ucwords($company_info->qtn_16) }}</p>
            </td>
          </tr> -->
          
          <!-- <tr>
            <td>17</td>
            <td>
              <h5>Do you think your company will be increasing its digital transformation efforts or adopt more digital solutions in the next 12 months?</h5>
              @if($company_info->qtn_18 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr> -->
          <!-- <tr>
            <td>18</td>
            <td>
              <h5>What challenges do you encounter in your efforts to digitally transform the business and/or to adopt digital solutions?</h5>
              @php 
               $qtnArray = explode(",",$company_info->qtn_19)
              @endphp
              @if(in_array("1",$qtnArray))
                <p><b>Ans: </b>Company does not see a need for a digital strategy and digital transformation</p>
              @endif
              @if(in_array("2",$qtnArray))
                <p><b>Ans: </b>Company does not know how to start planning and implementing a digital strategy</p>
              @endif
              @if(in_array("3",$qtnArray))
                <p><b>Ans: </b>Lack of a long-term company digital strategy and/or Management support</p>
              @endif
              @if(in_array("4",$qtnArray))
                <p><b>Ans: </b>Lack of budget</p>
              @endif
              @if(in_array("5",$qtnArray))
                <p><b>Ans: </b>Hoping to find alternative financing options such as grants and loans to start digital transformation</p>
              @endif
              @if(in_array("6",$qtnArray))
                <p><b>Ans: </b>Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</p>
              @endif
              @if(in_array("7",$qtnArray))
                <p><b>Ans: </b>Too many government regulations and other types external approvals when implementing digital transformation</p>
              @endif
              @if(in_array("8",$qtnArray))
                <p><b>Ans: </b>Lack of internal talents to implement, support and operate the digital transformation</p>
              @endif
              @if(in_array("9",$qtnArray))
                <p><b>Ans: </b>Other (Please Specify):</p>
              @endif
            </td>
          </tr> -->
          <!-- <tr>
            <td>19</td>
            <td>
              <h5>Reason why NOT increasing its digital transformation efforts or adopt more digital solutions in the next 12 months?</h5>
              @php 
               $qtn2Array = explode(",",$company_info->qtn_20)
              @endphp
              @if(in_array("1",$qtn2Array))
                <p><b>Ans: </b>Lack of budget and/or Reallocation of budget</p>
              @endif
              @if(in_array("2",$qtn2Array))
                <p><b>Ans: </b>Lack of internal talents to implement, support and operate the digital transformation</p>
              @endif
              @if(in_array("3",$qtn2Array))
                <p><b>Ans: </b>Lack of a long-term company digital strategy and/or Management support</p>
              @endif
              @if(in_array("4",$qtn2Array))
                <p><b>Ans: </b>Too many government regulations and other types external approvals when implementing digital transformation</p>
              @endif
              @if(in_array("5",$qtn2Array))
                <p><b>Ans: </b>Hoping to find alternative financing options such as grants and loans to start digital transformation</p>
              @endif
              @if(in_array("6",$qtn2Array))
                <p><b>Ans: </b>Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</p>
              @endif
              @if(in_array("7",$qtn2Array))
                <p><b>Ans: </b>Other (Please Specify):</p>
              @endif
            </td>
          </tr> -->

          <tr>
            <td>15</td>
            <td>
              <h5>Do you give regular training and development to your workers?</h5>
              @if($company_info->qtn_21 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr>
          <tr>
            <td>16</td>
            <td>
              <h5>Do you always review your workers’ performance in work?</h5>
              @if($company_info->qtn_22 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr>
          <tr>
            <td>17</td>
            <td>
              <h5>Do you always try to improve your employees’ engagement?</h5>
              @if($company_info->qtn_23 == 'yes')
                <p><b>Ans: </b>Yes</p>
              @else
                <p><b>Ans: </b>No</p>
              @endif
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection