<title>Express Loan Application Form</title>
@extends('layout')
@section('content')

<div class="col-md-3 col-md-offset-5 logindiv">

 <form action="expressloanform" method="POST" id="loginForm">
    @csrf
  <h4 class="text-center text-success">Express Loan Application Form</h4>

  <br><label class="radio-inline text-success">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> New!

  </label>  
  <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" > Member

  </label>
  <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" > Regular Member

  </label>

  <br><br><label for="branch" class="">Branch</label>
  <select name="branch" id="branch" class="form-control chosen-select">
  <option value="" disabled selected>--SELECT--</option>
  <option value="aglayan">Aglayan</option>
  <option value="agora">Agora</option>
  <option value="balingasag">Balingasag</option>
  <option value="baungon">Baungon</option>
  <option value="bulua">Bulua</option>
  <option value="butuan">Butuan</option>
  <option value="carmen">Carmen</option>
  <option value="cogon">Cogon</option>
  <option value="doncarlos">Don Carlos</option>
  <option value="elsalvador">El Salvador</option>
  <option value="gingoog">Gingoog</option>
  <option value="manolo">Manolo Fortich</option>
  <option value="maramag">Maramag</option>
  <option value="puerto">Puerto</option>
  <option value="talakag">Talakag</option>
  <option value="tabiglaran">Tagbilaran</option>
  <option value="tubigon">Tubigon</option>
  <option value="ubay">Ubay</option>
  <option value="valencia">Valencia</option>
  <option value="yacapin">Yacapin</option>
  </select>

  <div class="form-group">
    <br><input type="text" class="form-control" name="inputacctno" id="inputacctno." placeholder="Account no." required>
   </div>

  <br><label>Personal Information</label>
  <div class="form-group"> <!--form-->
   <input type="text" class="form-control" name="inputfirstname" id="inputfirstname" placeholder="First Name" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="inputmiddlename" id="inputmiddlename" placeholder="Middle Name" required>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="inputlastname" id="inputlastname" placeholder="Last Name" required>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="inputage" id="inputage" placeholder="Age" required>
   </div>

   <label for="gender" class="">Gender</label>
   <select  name="gender" id="gender" class="form-control chosen-select">
        <option value="" disabled selected>--SELECT--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
   </select>

   <br><div class="form-group">
    <input type="text" class="form-control" name="inputstatus" id="inputstatus" placeholder="Status" required>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="inputoccupation" id="inputoccupation" placeholder="Occupation" required>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="inputaddress" id="inputaddress" placeholder="Address" required>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="inputemail" id="inputemail" placeholder="Email Address" required>
   </div>
  <div class="form-group">
   <input type="contactno." class="form-control" name="inputcontact" id="inputcontact" placeholder="Contact no." required>
  </div>

  <label for="typeofloan" class="">Types of Loan</label>
   <select  name="typeofloan" id=typeofloan class="form-control chosen-select">
        <option value="" disabled selected>--SELECT--</option>
        <option value="pcl">Petty Cash Loan</option>
        <option value="pd">Renewal of Loan Against Time Deposit/Preferred Deposit</option>
        <option value="slp-year">SLP Against Bonuses(Mid-Year/Year-End Bonuses(Dep-Ed))</option>
        <option value="slp-product">SLP Against Bonuses(Productivity)</option>
        <option value="slp-pei">SLP Against Bonuses(Performance Enchance Incentives)</option>
        <option value="slp-pta">SLP Against Bonuses(Personal Teachers Advances)</option>
        <option value="slp-c">SLP Against Bonuses(Clothing)</option>
   </select>
<label for="purposeofloan" class="">Purpose of Loan</label>
   <select  name="selectpol" id="selectpol" class="form-control chosen-select">
        <option value="" disabled selected>--SELECT--</option>
        <option value="educned">Educational Needs</option>
        <option value="medem">Medical Emergency</option>
        <option value="food">Food and Sustenance</option>
        <option value="house">Household/Utility Bills</option>
        <option value="gadget">Appliances/Electronic Gadget</option>
        <option value="home">Home Improvement/Repair</option>
        <option value="business">Business</option>
        <option value="travel">Entertainment/Travel/Vacation</option>
        <option value="mainte">Vechile Purchase/Maintenance</option>
        <option value="special">Special Occasion</option>
   </select>

  <br><div class="form-group">
    <button class="btn btn-primary btn-block">Submit</button>
   </div>

 </form>
</div>

@endsection