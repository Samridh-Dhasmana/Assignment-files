<?php 
include('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";
if(mysqli_query($conn,$sql)){
echo "Record with id=$id deleted"; 
}
else{
    echo "Deletion failed";
}
?>