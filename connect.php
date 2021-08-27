<?php
 $name = $_POST['name']; 
 $email = $_POST['email']; 
 $pass = $_POST['password']; 
 $type = $_POST['type']; 

$conn = new mysqli('localhost','root','','rf_db');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
} 
else{

    $stmt = $conn->prepare("insert into registration(name, email, password, type)
    values(?, ?, ?, ?);");
$stmt->bind_param("ssss",$name, $email, $pass, $type);
$stmt->execute();
$stmt->close();
if(strcmp($type,"PG OWNER")==0)
{
    $stmt1 = $conn->prepare("insert into pg_login(email, password)
    values(?, ?);");
$stmt1->bind_param("ss",$email, $pass);
$stmt1->execute();
$stmt1->close();
}
else if(strcmp($type,"TIFFIN/MESH SERVICE")==0)
{
    $stmt2 = $conn->prepare("insert into tfm_login(email, password)
    values(?, ?);");
$stmt2->bind_param("ss",$email, $pass);
$stmt2->execute();
$stmt2->close();
}
else if(strcmp($type,"USER")==0)
{
    $stmt3 = $conn->prepare("insert into user_login(email, password)
    values(?, ?);");
$stmt3->bind_param("ss",$email, $pass);
$stmt3->execute();
$stmt3->close();
}


$conn->close();

}
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