<?php
/*
This file containg db configuration assuimg you are running mysql user "root" and password ""
*/
$server="localhost";
$username="root";
$password="";

// Try conneting to the db
$conn =mysqli_connect($server, $username, $password);
// check the connection;
if($conn == false)
{
    die("connection to this db failed due to" .mysqli_connect_error());
}

 $name = $_POST['name']; 
 $email = $_POST['email'];
$pass = $_POST['password'];
 $type = $_POST['type'];
$sql= "INSERT INTO 'rf_db . registration' ('name','email','password','type') VALUES ('$name',$email',$pass'
'$type');";
if($conn->query($sql)==true)
{
    echo "tooo good";
}
else
{
    echo "error: $sql $conn->error";
}
$con->close;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
