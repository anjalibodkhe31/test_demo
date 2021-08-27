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
<h1 class="text-center text-white bg-dark">Your Tiffin/Mesh service detail</h1>
<div class="col-lg-8  m-auto d-block">
   <form  action="db_upload.php" method="post" enctype="multipart/form-data" target="_blank">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'rf_db');

$emi=$_POST['emai'];
$nam=$_POST['name'];

$len=strlen($emi);
$rk=substr($emi,-($len-1));



            $displayq = "SELECT * FROM `tfm_data` WHERE  email='$rk' and name='$nam' ";


            $querydisplay = mysqli_query($con,$displayq);
         
            
             $result = mysqli_fetch_array($querydisplay);

   
?>
   <div class="form-group">
     <label for="email">email:</label>
     <input type="email"  name="x" id="xy" value="<?php echo $_POST['emai']?>"class=
     "form-control"  disabled>
     </div>

     <div class="form-group">
     <label for="name">NAME:</label>
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
     <label for="file">Food image:</label>
     <input type="file" name="file" id="file" value="<?php echo $result['image']; ?>" class="form-control">
     </div>
     
     <div class="form-group">
     <label for="price">Price:</label>
     <input type="number" name="price" id="price" value="<?php echo $result['price'];?>" class=
     "form-control" min='1' max='1000000' >
     </div>
     
     <div class="form-group">
     <label for="type">Your service type:</label>
     <select name="type" id="type"  class="form-control">
     <option value = "<?php echo $result['type']; ?>"><?php echo $result['type']; ?></option>
     <option value = "Mesh Service">Mesh Service</option>
     <option value = "Tiffin Service">Tiffin Service</option>
     </select>
     </div>
     
    <input type="submit" value="Submit" name="submi" class="btn-sucess">
    <input type="email"  name="email" id="em" value="<?php echo $_POST['emai']?>"class=
     "form-control"  hidden>
     </form>
  <?php 
 
?>

</body>
</html>