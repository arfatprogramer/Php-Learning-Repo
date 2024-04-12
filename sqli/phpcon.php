<?php

$servername="localhost";
$username="root";
$password="";
$dbname="phptut";

//to Connect with database 
$con =new mysqli($servername,$username,$password,$dbname);

// check check
if($con ->connect_error){
    die("Connection Failed.".$con->connect_errno);
}
echo "Connection Sussfully"

// try{
// $con=mysqli_connect($servername,$username,$password,$dbname);

// echo "Connection Succeeful";
// }
// catch(Exception $e){
    
//     echo "Connection Failed<br>";
//     echo $e;

// }
?>