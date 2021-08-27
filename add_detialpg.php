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
<h1 class="text-center text-white bg-dark">ADD PG detial</h1>
<div class="col-lg-8  m-auto d-block">
   <form  action="db_uploadpg.php" method="post" enctype="multipart/form-data" target="_blank">
<?php
$email=$_POST['email'];
?>
   <div class="form-group">
     <label for="name"></label>
     <input type="email" hidden  name="email" id="em" value=" <?php echo $email; ?> "class=
     "form-control"  >

     </div>
     <div class="form-group">
     <label for="name">NAME:</label>
     <input type="text" name="name" id="nam" placeholder="enter your name" class=
     "form-control"  >
     </div>

     <div class="form-group">
     <label for="address">Address:</label>
     <input type="text" name="address" id="addres" placeholder="enter your address" class=
     "form-control"  >
     </div>
 
     <div class="form-group">
     <label for="contact">Contact no:</label>
     <input type="text" name="contact" id="contactn" placeholder="enter your contact no" class=
     "form-control"  >
     
     <div class="form-group">
     <label for="available">Room is Available or Room is Not Available:</label>
     <select  name = "available" id="available"  class="form-control">
     <option value = "Room is Available">Room is Available</option>
     <option value = "Room is not Available">Room is not Available</option>
     </select>
     </div>

     <div class="form-group">
     <label for="file">Room image:</label>
     <input type="file" name="file" id="file"class="form-control">
     </div>

     <div class="form-group">
     <label for="description">Description</label>
     <input type="text" name="description" id="description" placeholder="enter additional info like price of room" class=
     "form-control" >
     </div>


    <input type="submit" value="Submit" name="submi" class="btn-sucess">
     </form>
</div>
</div>

</body>
</html>