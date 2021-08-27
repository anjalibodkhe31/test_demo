<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'rf_db');

 if(isset($_POST['submi']))
 {
    $email=$_POST['email'];
     $name=$_POST['name'];
     $addess=$_POST['address'];
     $contact=$_POST['contact'];
     $type=$_POST['type'];
     $price=$_POST['price'];
     $files = $_FILES['file'];
    
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

         $q= "UPDATE `tfm_data` SET `name`='$name',`address`='$addess',`contactno`='$contact',
         `image`='$destinationfile',`price`='$price',`type`='$type' WHERE email='$email' ";
      $query = mysqli_query($con,$q);

      if($query)
{
    echo '<script type="text/javascript"> alert("Success")</script>';
}
else
{
    echo '<script type="text/javascript"> alert("Please try again")</script>';
}
}   
 }
?>
</body>
</html>