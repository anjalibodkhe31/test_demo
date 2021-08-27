<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  body {
    background-color:GreenYellow;
  }
  </style>
  <script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<h1 class="text-center text-white bg-dark">PLEASE REGISTER</h1>
<div class="col-lg-5  m-auto d-block">
   <form name="myForm" action="regtration.php" method="post" enctype="multipart/form-data" target="_blank" onsubmit="return validateForm()">
   <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" name="name" id="nam" placeholder="enter your name" class=
     "form-control" >
     </div>
     <br>
   <div class="form-group">
     <label for="email">Email:</label>
     <input type="Email" name="email" id="nam" placeholder="enter your email" class=
     "form-control"  >
     </div>
     <br>
     <div class="form-group">
     <label for="password">Password:</label>
     <input type="Password" name="password" id="nam" placeholder="create your password" class=
     "form-control"  >
     </div>
     <br><br>
   <label for="Stype">Select Your Service:</label>
   <br>
   <div class="form-check-inline">
   
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="PG owner">PG owner
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="Tiffin /Mesh service">Tiffin /Mesh service
  </label>
</div>
<br><br><br>
<input type="submit" name="submit" class="btn btn-info  btn-sucess" value="Submit">
</form>
</div>

<?php
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'rf_db');
 if(isset($_POST['submit']))
 {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $type=$_POST['optradio'];

 
if($type == "Tiffin /Mesh service")
{
  $q="INSERT INTO `registration`(`name`, `email`, `password`, `type`) VALUES ('$name','$email','$pass','$type')";
 $query = mysqli_query($con,$q);
  $qq="INSERT INTO `tfm_data`(`name`, `email`)VALUES('$name','$email')";
  mysqli_query($con,$qq);

  $qr="INSERT INTO `tfm_login`(`email`, `password`)VALUES('$email','$pass')";
  mysqli_query($con,$qr);

}
else
{
  $q="INSERT INTO `registration`(`name`, `email`, `password`, `type`) VALUES ('$name','$email','$pass','$type')";
 $query = mysqli_query($con,$q);
 $qqq="INSERT INTO `pg_data`(`name`, `email`)VALUES('$name','$email')";
 mysqli_query($con,$qqq);
 $qqqr="INSERT INTO `pg_login`(`email`, `password`)VALUES('$email','$pass')";
 mysqli_query($con,$qqqr);
}

   

if($query)
{
    echo '<script type="text/javascript"> alert("Thank you For registration")</script>';
}
else
{
    echo '<script type="text/javascript"> alert("This email id already exist Please register again")</script>';
}
}

?>
</body>
</html>