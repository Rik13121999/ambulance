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


    <div class="login">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li>
        <button type="button" class="btn btn-outline-primary"><a href="#">LOG OUT</a></button>
      </li>
    </ul>
  </div>
</nav>
<div class="carro">
	
	          <h3 style="color:white;">LOG IN HERE</h3>
 
	          <form>
				  <div class="form-group row" style="align-self: center">
				    <label for="inputEmail3" class="col-sm-2 col-form-label" style="color:white; padding: 20px;">Email</label>
				    <div class="col-sm-10" style="padding-right: 704px;" >
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				    <label for="inputEmail3" class="col-sm-2 col-form-label" style="color:white; padding: 20px;">Password</label>
				    <div class="col-sm-10" style="padding-right: 704px;">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Password">
				    </div>
				  <div class="form-group row">
				    <div class="col-sm-10 offset-sm-2">
				      <button type="submit" class="btn btn-primary" style="margin-left: 200px;">Sign in</button>
				    </div>
				  </div>
				</form>

        </div>
        <div>
        	<div style=" font-size: 40px;padding-left: 100px;color: white;">New user? Register here</div>
        	
        	<div style="padding-left: 100px;"><button type="button" class="btn btn-outline-success"><a href="signup.php" >Signup</a></button></div>
        </div>
      
    </div>



	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>