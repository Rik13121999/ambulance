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

    <title>hospital registration</title>
</head>
<body>
<div class="container-fluid signup">

<div class="d-flex flex-row">

  <div class="p-2"><h4><div class="shadow isee" style="padding-right: 29px;">REGISTRATION</div></h4></div>
</div>
<form method="post">
<div class="d-flex flex-row form-group row" style="padding-right: 66px;">
<div class="d-flex flex-column" style="padding-right: 44px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label isee">Name</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="name of your organization">
</div>
</div>
<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3">Email</label>
<div >
    <div style="padding-left: 114px">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="email">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5 isee">
     <label for="inputEmail3">Contact</label>
<div>
    <div style="padding-left: 114px">
      <input type="tel" class="form-control" name="contact" id="inputEmail3" pattern=".{10}" placeholder="mobile">
    </div>
</div>
</div>
</div>


<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3">Password</label>
<div >
    <div style="padding-left: 114px">
      <input type="Password" class="form-control" name="password" id="inputEmail3"  placeholder="123@xyz">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5 isee">
     <label for="inputEmail3">Confirm Password</label>
<div>
    <div style="padding-left: 114px">
    <input type="Password" class="form-control" name="confirm_pass" id="inputEmail3"  placeholder="123@xyz">
    </div>
</div>
</div>
</div>




<div class="d-flex flex-row form-group row" style="padding-right: 66px; padding-left: 5px;">
<div class="d-flex flex-column" style="padding-right: 27px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label isee">Reg. ID</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="Address" class="form-control" name="reg_id" id="inputEmail3" placeholder="">
</div>
</div>




<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3 ">Country</label>
<div >
    <div style="padding-left: 114px">
      <input type="country" class="form-control" name="country" id="inputEmail3" placeholder="country name">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5 isee">
     <label for="inputEmail3 ">State</label>
<div>
    <div style="padding-left: 114px">

    </div>
</div>
</div>
</div>


<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3">District</label>
<div >
    <div style="padding-left: 114px">
      <input type="district" class="form-control" name="district" id="inputEmail3" placeholder="district">
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5 isee">
     <label for="inputEmail3 " id="hover">Location</label>
<div>
    <div style="padding-left: 114px">
    	<select class="custom-select" name="location"> <div><option selected >Open this to select your default Zone</option></div>
    	<?php
    	$stmt1 = $pdo->query("SELECT * FROM location");
    	while( $row1 = $stmt1->fetch(PDO::FETCH_ASSOC) ) {

      		echo ('<option value="'.$row1["l_location_name"].'">'.$row1["l_location_name"].'</option>');
        
         }
    	?>
    	</select>
      
    </div>
    <div id="hoverdiv"></div>
</div>
</div>
</div>
<button type="submit" name="reg" class="btn btn-warning">SUBMIT</button>
</form>

</div>
</div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>