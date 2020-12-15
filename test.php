<?php
require_once "pdo_connect.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="index_design.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>index</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li>
        <button type="button" class="btn btn-outline-primary"><a href="login.php">LOG IN</a></button>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid signup">

<div class="d-flex flex-row">

  <div class="p-2"><h4><div class="shadow" style="padding-right: 29px;">REGISTRATION</div></h4></div>
</div>
<div class="d-flex flex-row form-group row" style="    padding-right: 85px;">
<div class="d-flex flex-column" style="padding-right: 44px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="name">
</div>
</div>
<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5">
     <label for="inputEmail3">Email</label>
<div >
    <div style="padding-left: 114px">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="email">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5">
     <label for="inputEmail3">Contact</label>
<div>
    <div style="padding-left: 114px">
      <input type="Contact" class="form-control" name="contact" id="inputEmail3" placeholder="contact">
    </div>
</div>
</div>
</div>


<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5">
     <label for="inputEmail3">Password</label>
<div >
    <div style="padding-left: 114px">
      <input type="Password" class="form-control" name="Password" id="inputEmail3" placeholder="123@xyz">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5">
     <label for="inputEmail3">Confirm Password</label>
<div>
    <div style="padding-left: 114px">
      <input type="Password" class="form-control" name="confirm_pass" id="inputEmail3" placeholder="123@xyz">
    </div>
</div>
</div>
</div>




<div class="d-flex flex-row form-group row" style="    padding-right: 85px;">
<div class="d-flex flex-column" style="padding-right: 27px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="Address" class="form-control" name="name" id="inputEmail3" placeholder="xy/z something street , nearest location">
</div>
</div>




<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5">
     <label for="inputEmail3">Country</label>
<div >
    <div style="padding-left: 114px">
      <input type="country" class="form-control" name="country" id="inputEmail3" placeholder="country name">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5">
     <label for="inputEmail3">State</label>
<div>
    <div style="padding-left: 114px">
      <input type="State" class="form-control" name="state" id="inputEmail3" placeholder="state">
    </div>
</div>
</div>
</div>


<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5">
     <label for="inputEmail3">Country</label>
<div >
    <div style="padding-left: 114px">
      <input type="district" class="form-control" name="district" id="inputEmail3" placeholder="district">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5">
     <label for="inputEmail3">Location</label>
<div>
    <div style="padding-left: 114px">
      <input type="Address" class="form-control" name="state" id="inputEmail3" placeholder="Zone">
    </div>
</div>
</div>
</div>



</div>






</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>