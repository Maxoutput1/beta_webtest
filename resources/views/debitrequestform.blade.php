<title>Debit Request Form</title>
@extends('layout')
@section('content')
<div class="col-md-4 col-md-offset-4 logindiv">
 <form id="loginForm">
  <h3 class="text-center text-success">Debit Request Form</h3>
  <div class="form-group">
   <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
  </div>
  <div class="form-group">
   <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
  </div>
  <div class="form-group">
   <button class="btn btn-primary btn-block">Submit</button>
  </div>
 </form>
</div>
@endsection