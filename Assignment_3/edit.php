<?php
    include('config.php');
?>

<?php 
 $id=$_GET['id'];
 $sql="SELECT * FROM `users` WHERE `id`=$id";
 $result=mysqli_query($conn,$sql);
 $row=$result->fetch_assoc();
 $username=$row['username'];
 $email=$row['email'];
 $gender=$row['gender'];
 $city=$row['city'];
?>

<?php 
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql= "UPDATE  `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'"; 
    if(mysqli_query($conn,$sql))
    {
        echo "Data updated succesfully";
        header("Location:Q4.php");
    }
    else
    {
        echo "Failed to update";
    }
}
?>
<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="edit.php?id=<?php echo "$id";?>" method="POST">
            Username <input type="text" name="username" value=<?php echo "$username"?> placeholder="Type Username"  required/>
            <br>
            Email-id  <input type="email" name="email" value=<?php echo "$email"?> placeholder="Type Email-id" required/>
            <br>
            Gender-
            <input type="radio" name="gender" value="Male">Male 
            <input type="radio" name="gender" value="Female">Female 
            <br>
            Select City  <select name="city" > 
            <option value="DehraDun" <?php if($city=="DehraDun"){ echo "selected";}?>>DehraDun</option>
            <option value="Delhi" <?php if($city=="Delhi"){ echo "selected";}?>>Delhi</option>
            <option value="Jaipur" <?php if($city=="Jaipur"){ echo "selected";}?>>Jaipur</option>
           </select>
           <br>
           <input type="submit" name="submit" value="Update">
            
        </form>
    </body>
</html>