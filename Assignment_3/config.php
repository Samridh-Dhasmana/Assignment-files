<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="Web";

$conn=mysqli_connect($hostname,$username,$password,$databaseName);
if($conn){
 echo "Connection Sucessful..";
}
else{
    echo "Connection Failed"+ mysqli_connect_error();
}
?>