<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital data </title>

 <link rel="stylesheet" type="text/css" href="style1.css">
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
<h1 class="text-center text-white bg-dark">Hospital Detail</h1>
<BR>
<br>
</div>


 

<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'rf_db');

$nam=$_POST['n'];
if($nam != null)
     {
            $displayq = "SELECT * FROM `hospital_data` WHERE `name` = '$nam' ";

            $querydisplay = mysqli_query($con,$displayq );
  
            
            $result = mysqli_fetch_array($querydisplay);
  
      
      ?>
      <div class="maincontant">
     <img src=" <?php echo $result['image']; ?>" height="300px" width="300px"></br>
        <div class="gradient-multiline">
     </br>
        <span><b>Name:</b>  <?php echo $result['name']; ?></span></br></br>
        <span><b>Address:</b>  <?php echo $result['address']; ?></span></br></br>
        <span><b>Contact No:</b> <?php echo $result['contactno']; ?></span></br></br>
        <span><b>Number of Remdesivir Injection</b>  <?php echo $result['Remdesivir_Injection'];?></span></br></br>
     </span>
     </div>
          
     </div>
           <?php
           
        
      
    }
  
    else{
        echo  "<script>alert('Please Enter Name of the Hospital')</script>";

    }
     
  ?>
  

  </body>
  </html>