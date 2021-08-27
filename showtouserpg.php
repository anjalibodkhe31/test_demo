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
 <h1 class="text-center text-white bg-dark">PG Detail</h1>
<BR>
<br>
</div>


<table class="table table-bordered table-striped table-hover">
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

           
               
                 $displayq = " SELECT * FROM `pg_data`";


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

    
           </td>

         </tr>
         <?php
      }

?>

</tbody>
</table>


    
</body>
</html>