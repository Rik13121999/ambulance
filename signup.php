<?php

function insert_into_user($pdo,$name,$mobile,$email,$address,$pass,$id,$CorD){
           $stmt = $pdo->prepare('INSERT INTO user 
            (u_name,u_mobile,u_email,u_customerORdriver,u_address,u_password,u_location_id)
            VALUES (:u_name,:u_mobile,:u_email,:u_customerORdriver,:u_address,:u_password,:u_location_id)');
            $stmt->execute(array(
              ':u_name'=>$name,
              ':u_mobile'=>$mobile,
              ':u_email'=>$email,
              ':u_customerORdriver'=>$CorD,
              ':u_address'=>$address,
              ':u_password'=>$pass,
              ':u_location_id'=>$id)
            );
return;
}

function find_location_id($pdo,$location){
  $stmt = $pdo->prepare('SELECT * FROM location WHERE l_location_name=:l_location_name');
   $stmt->execute(array(
    ':l_location_name'=>$location));

   if( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      return $row['l_id'];
  }else{
          $_SESSION['error'] = '<h2 class="text-center text-danger">Correctly choose the location from the dropdown menu</h2>';
          header("Location: signup.php");
          return;
  }
}

require_once "pdo_connect.php";
session_start();

if(isset($_POST['reg'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $country=$_POST['country'];
  $district=$_POST['district'];
  $location= $_POST['location'];
  $state=$_POST['state'];
  if(isset($_POST['driving_lic'])){
    $driving_lic=$_POST['driving_lic'];
    if(strlen($driving_lic)<1){
       $_SESSION['error'] = '<h2 class="text-center text-danger">All Fields are Required</h2>';
        header("Location: signup.php");
        return;
    }
  }

   if ( strlen($name) < 1 || strlen($email) < 1 || strlen($address) < 1  || strlen($district) <1 || strlen($country) <1 || strlen($location) <1){
        $_SESSION['error'] = '<h2 class="text-center text-danger">All Fields are Required</h2>';
        header("Location: signup.php");
        return;
    }
    if ( strpos($_POST['email'],'@') === false ) {
        $_SESSION['error'] = '<h2 class="text-center text-danger">Pls Check your Email</h2>';
        header("Location: signup.php");
        return;
    }
    if(isset($_POST['password'])){
      if(isset($_POST['confirm_pass'])){
        if($_POST['password']==$_POST['confirm_pass']){
          $pass=$_POST['password'];
        }
        else{
          $_SESSION['error']='<h3  class="text-center text-danger>Password Mismatch</h3>';
          header("Location: signup.php");
          return;
        }
      }
    }

    if(isset($_POST['driving_lic'])){
      $id=find_location_id($pdo,$location);
      insert_into_user($pdo,$name,$mobile,$email,$address,$pass,$id,1);
      $stmt1 = $pdo->prepare("SELECT * FROM user WHERE (u_name=:u_name) AND (u_mobile=:u_mobile) AND (u_customerORdriver=:u_customerORdriver)");
      $stmt1->execute(array(
        ':u_name'=>$name,
        ':u_mobile'=>$mobile,
        ':u_customerORdriver'=>1));
      while( $row1 = $stmt1->fetch(PDO::FETCH_ASSOC) ) {

          $stmt2 = $pdo->prepare('INSERT INTO driver_detail 
            (d_driving_lic_no,d_user_id)
            VALUES (:d_driving_lic_no,:d_user_id)');
            $stmt2->execute(array(
              ':d_driving_lic_no'=>$driving_lic,
              ':d_user_id'=>$row1['u_id'])
            );
         header("Location: login.php");
        return;   

    }
  }else{

      $id=find_location_id($pdo,$location);
      insert_into_user($pdo,$name,$mobile,$email,$address,$pass,$id,0);
        header("Location: login.php");
        return; 
    }

   



  


// Flash pattern

}

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

    <title>registration</title>
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

  <div class="p-2"><h4><div class="shadow isee" style="padding-right: 29px;">REGISTRATION</div></h4></div>
</div>
<div>
  <?php
    if ( isset($_SESSION['error']) ) {
    echo '<h3 style="color:red">'.$_SESSION['error']."</h3>\n";
    unset($_SESSION['error']);
}
  ?>
</div>
<form method="post">
<div class="d-flex flex-row form-group row" style="    padding-right: 61px;">
<div class="d-flex flex-column" style="padding-right: 44px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label isee">Name</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="name">
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
      <input type="tel" class="form-control" name="mobile" id="inputEmail3" pattern=".{10}" placeholder="mobile">
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




<div class="d-flex flex-row form-group row" style="    padding-right: 61px;">
<div class="d-flex flex-column" style="padding-right: 27px;">
     <label for="inputEmail3" class="col-sm-2 col-form-label isee">Address</label>
</div>
<div class="d-flex flex-column col-sm" style="padding-right: 184px;">
      <input type="Address" class="form-control" name="address" id="inputEmail3" placeholder="xy/z something street , nearest location">
</div>
</div>




<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3 ">Country</label>
<div >
    <div style="padding-left: 114px">
        <select class="custom-select" name="country"> <div><option selected >Open this to select your country</option></div>
      <?php
      $stmt1 = $pdo->query("SELECT * FROM country");
      while( $row1 = $stmt1->fetch(PDO::FETCH_ASSOC) ) {

          echo ('<option value="'.$row1["c_country_name"].'">'.$row1["c_country_name"].'</option>');
        
         }
      ?>
      </select>
    </div>
</div>
</div>
<div class="d-flex flex-column col-md-5 isee">
     <label for="inputEmail3 ">State</label>
<div>
    <div style="padding-left: 114px">
          <select class="custom-select" name="state"> <div><option selected >Open this to select your state</option></div>
      <?php
      $stmt1 = $pdo->query("SELECT * FROM state");
      while( $row1 = $stmt1->fetch(PDO::FETCH_ASSOC) ) {

          echo ('<option value="'.$row1["s_state_name"].'">'.$row1["s_state_name"].'</option>');
        
         }
      ?>
      </select>
    </div>
</div>
</div>
</div>


<div class="d-flex flex-row form-group row">
  
<div class="d-flex flex-column  col-md-5 isee">
     <label for="inputEmail3">District</label>
<div >
    <div style="padding-left: 114px">
        <select class="custom-select" name="district"> <div><option selected >Open this to select your district</option></div>
      <?php
      $stmt1 = $pdo->query("SELECT * FROM district");
      while( $row1 = $stmt1->fetch(PDO::FETCH_ASSOC) ) {

          echo ('<option value="'.$row1["d_district_name"].'">'.$row1["d_district_name"].'</option>');
        
         }
      ?>
      </select>
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
<div class="d-flex flex-row form-group row">
<div class="d-flex flex-column col-md-5 isee">
  <input type="checkbox" id="myCheck" onclick="myFunction()">
  <label>Click on this If you are willing to join as an ambulance driver</label>
</div>
<div class="d-flex flex-column col-md-5 isee" id="text">

</div>
</div>


<button type="submit" name="reg" class="btn btn-warning">SUBMIT</button>
</form>



</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
   function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.innerHTML='<label for="inputEmail3">Driving Licence</label><div>\
    <div style="padding-left: 114px"><input type="text" class="form-control" \
    name="driving_lic" id="inputEmail3"></div>';
  }else{
    text.innerHTML="";
  } 
}

</script>