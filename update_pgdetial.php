<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD YOUR DATA</title>

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
<br>
<h1 class="text-center text-white bg-dark">Update your PG detial</h1>
<div class="col-lg-8  m-auto d-block">
   <form  action="upload_datapg.php" method="post" enctype="multipart/form-data" target="_blank">
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'rf_db');

$emi=$_POST['emai'];
$nam=$_POST['name'];

$len=strlen($emi);
$rk=substr($emi,-($len-1));
;


            $displayq = "SELECT * FROM `pg_data` WHERE  email='$rk' and name='$nam' ";


            $querydisplay = mysqli_query($con,$displayq);
         
            
             $result = mysqli_fetch_array($querydisplay)

   
?>
   <div class="form-group">
   <label for="email">Email:</label>
   <input type="email"  name="x" id="xy" value="<?php echo $_POST['emai']?>"class=
     "form-control" disabled>
     </div>

     <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" name="name" id="nam" value ="<?php echo $result['name']; ?>" class=
     "form-control"  >
     </div>

     <div class="form-group">
     <label for="address">Address:</label>
     <input type="text" name="address" id="addres" value="<?php echo $result['address']; ?>" class=
     "form-control"  >
     </div>
 
     <div class="form-group">
     <label for="contact">Contact no:</label>
     <input type="text" name="contact" id="contactn" value="<?php echo $result['contactno']; ?>" class=
     "form-control"  >
     </div> 
     
     <div class="form-group">
     <label for="available">Room is Available or Room is Not Available:</label>
     <select  name = "available" id="available"  class="form-control">
     <option value = "<?php echo $result['availablenot']; ?>"><?php echo $result['availablenot']; ?></option>
     <option value = "Room is Available">Room is Available</option>
     <option value = "Room is not Available">Room is not Available</option>
     </select>
     </div>

     <div class="form-group">
     <label for="file">Room image:</label>
     <input type="file" name="file" id="file" value="<?php echo $result['image']; ?>" class="form-control">
     </div>
     
     <div class="form-group">
     <label for="description">Description</label>
     <input type="text" name="description" id="description" value="<?php echo $result['desription']; ?>" class=
     "form-control" >
     </div>
     
     
    <input type="submit" value="Submit" name="submi" class="btn-sucess">
    <input type="email"  name="email" id="em" value="<?php echo $_POST['emai']?>"class=
     "form-control" hidden >
     </div>
     </form>
  <?php 
 
?>

</body>
</html>