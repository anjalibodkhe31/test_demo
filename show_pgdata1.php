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
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<table class="table table-bordered table-striped tabel-hover">
<thead>
 <th>NAME</th>
 <th>ADDRESS</th>
 <th>AVAILABE OR NOT_AVAILABE</th>
 <th> CONTACT NO</th>
 <th>ROOM PICTURE</th>
 <th>DESRIPTION</th>
</thead>
<tbody>
<?php

$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'rf_db');


    if(isset($_POST['submit']))
    {


        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $disp="SELECT `email`, `password` FROM `pg_login` WHERE email='$email' and password='$pass' ";

               $query = mysqli_query($con,$disp);

               $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
                
               
               $count = mysqli_num_rows($query);
               if($count == 1) {
                 $displayq = " SELECT * FROM `pg_data` WHERE email='$email' ";


          $querydisplay = mysqli_query($con,$displayq );

          
          while( $result = mysqli_fetch_array($querydisplay))     {

    
    ?>
        <tr>
        <td> <?php echo $result['name']; ?>    </td>
        <td> <?php echo $result['address']; ?> </td>
        <td> <?php echo $result['availablenot']; ?> </td>
        <td> <?php echo $result['contactno']; ?> </td>
        <td> <img src=" <?php echo $result['image']; ?>" height="100px" width="100px">
    </td>
    <td> <?php echo $result['desription']; ?>

    <form action="add_detialpg.php" method="post" target="_blank">
          <lebel style ="position: absolute; left: 550px; top: 160px;">To Add new detail</lebel>
  
          <input type="hidden" id="email" name="email" value=" <?php echo $result['email'];?>">
           <input style ="position: absolute; right: 600px;  top: 160px;" type="submit" name="submit" Value ="add"> 
 </form> 

  <form action="update_pgdetial.php" method="post" target="_blank">
          <lebel style ="position: absolute;  left: 350px; top: 200px;">To upload your detail </lebel>
          <input style ="position: absolute;  right: 600px;  top: 200px;"type="text" name="name" placeholder="enter name where you want to update" size="32" required>
          <input type="hidden" id="emai" name="emai" value=" <?php echo $result['email'];?> ">
           <input style ="position: absolute;  right: 500px;  top: 200px;" type="submit" name="submit" Value ="update"> 
 </form> 
           </td>

         </tr>
         <?php
      }
    }
    else {
        $message = "EMAIL OR PASSWORD IS WORNG";
echo "<script type='text/javascript'>alert('$message');</script>";
    }

} 

?>
</tbody>
</table>


    
</body>
</html>