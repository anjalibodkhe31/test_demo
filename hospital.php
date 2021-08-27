<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital data </title>


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

<table class="table table-bordered table-striped table-hover">
<thead> 
 <th>NAME</th>
 <th>ADDRESS</th>
 <th>CONTACT NO</th>
 <th>NUMBER OF ROOMS AVAILABLE</th>
 <th>HOSPITAL PICTURE</th>
 <th>NUMBER OF BEDS AVAILABLE</th>

</br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter Hospital Name :
<form method="post" action="searchhospital.php">
<div class="form-group"> 
<input type="text" name="n" id="nam" placeholder="Enter Full Name of Hospital that you want to search" class=
     "form-control"  > </div>
     <div class="form-group">
     &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" >
</div>
</br>
</br>
 
</thead>
<tbody>
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'rf_db');


     
            $displayq = "SELECT * FROM `hospital_data`";

            $querydisplay = mysqli_query($con,$displayq );
  
            
            while( $result = mysqli_fetch_array($querydisplay))     {
  
      
      ?>
          <tr>    
          <td> <?php echo $result['name']; ?>    </td>
          <td> <?php echo $result['address']; ?> </td>
          <td> <?php echo $result['contactno']; ?> </td>
          <td> <?php echo $result['numberofrooms']; ?> </td>
          <td> <img src=" <?php echo $result['image']; ?>" height="100px" width="100px"></td>
          <td> <?php echo $result['beds'];?>
          
           </td>
           </tr>
           <?php
           
        }
      
  
  
     
  ?>
  
</tbody>

  </table>

  </body>
  </html>