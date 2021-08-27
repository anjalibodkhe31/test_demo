<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data </title>


   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
 <div class="container">
<h1 class="text-center text-white bg-dark">Your Detail</h1>
<BR>
<br>
<div class="col-lg-5  m-auto d-block">
<h1 class="text-center text-black">To update your detial Click on Update</h1>
<form action="upload_tfmdata" target="_blank">
<input type="submit" name="submit" value="Update" 
class="btn-sucess form-control text-center text-white bg-dark" >
</form>
</div>
<br>
<br>
<table class="table table-bordered table-striped tabel-hover">
<thead>
 <th>NAME</th>
 <th>ADDRESS</th>
 <th> CONTACT NO</th>
 <th>TYPE OF SERVICE</th>
 <th>TIFFIN/MESH PICTURE</th>
 <th>Price per (Plate/Tiffin)</th>

 
 
</thead>
<tbody>
<?php

$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'rf_db');


    if(isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactno = $_POST['contact'];
    $type = $_POST['type'];
    $price = $_POST['price'];    
    $files = $_FILES['file'];
    
    echo "<br>";

    $filename = $files['name'];
      
      $fileerror=$files['error'];
      $filetmp=$files['tmp_name'];

      $filetext = explode('.',$filename);

      $filecheck = strtolower(end($filetext));

      $fileextstored = array('png', 'jpg', 'jpeg');

      if(in_array($filecheck,$fileextstored))
      {

          $destinationfile='up/'.$filename;
          move_uploaded_file($filetmp,$destinationfile);

          $q= "INSERT INTO `tfm_data`(`name`, `address`, `contactno`, `image`, `price`, `type`)
           VALUES ('$name','$address','$contactno','$destinationfile','$price','$type')";


             $query = mysqli_query($con,$q);

             $displayq = " select * from tfm_data ";

          $querydisplay = mysqli_query($con,$displayq );

          
          while( $result = mysqli_fetch_array($querydisplay))     {

    
    ?>
        <tr>
        <td> <?php echo $result['name']; ?>    </td>
        <td> <?php echo $result['address']; ?> </td>
        <td> <?php echo $result['contactno']; ?> </td>
        <td> <?php echo $result['type']; ?> </td>
        <td> <img src=" <?php echo $result['image']; ?>" height="100px" width="100px"></td>
        <td> <?php echo $result['price']; ?> </td>
         </tr>
         <?php
      }
    }
}

    

?>
</tbody>
</table>


    
</body>
</html>