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
<h1 class="text-center text-white bg-dark">Your Tiffin/Mesh service detial</h1>
<div class="col-lg-8  m-auto d-block">
   <form action="show_tfdata.php" method="post" enctype="multipart/form-data" target="_blank">

  

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
     <label for="type">Your service type:</label>
     <input type="text" name="type" id="type" placeholder="enter your type of service Mesh or Tiffin" class=
     "form-control">
     </div> 

     <div class="form-group">
     <label for="price">Price:</label>
     <input type="number" name="price" id="price" placeholder="enter price of per plate/tiffin " class=
     "form-control" min='1' max='1000000' >
     </div>

     <div class="form-group">
     <label for="file">Food image:</label>
     <input type="file" name="file" id="file"class="form-control">
     </div>
     
    <input type="submit" value="Submit" name="submit" class="btn-sucess">

    
     </div>

     </form>
</div>
</div>

</body>
</html>