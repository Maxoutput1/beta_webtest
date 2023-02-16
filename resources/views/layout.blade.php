<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand bg-lighter">
  <div class="container">
      <ul class="nav nav-tabs">
          <li role="presentation"><a href="/">Home</a></li>
          <li role="presentation" class="active"><a href="/expressloanform">Express Loan Form</a></li>
          <li role="presentation"><a href="/debitrequestform">Debit Request Form</a></li>
      </ul>
  </div>
</nav>

<style>
body{
  background: green;
}
.logindiv{
  background: #fff;
  border: 1px solid #ddd;
  box-shadow: 1px 2px 3px #ccc;
  padding: 10px;
  margin-top: 10px;
}
</style>
@yield('content')
</head>

<body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>