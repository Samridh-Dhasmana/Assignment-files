<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$sql="INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
mysqli_query($conn,$sql);
}
else{
echo "click submit button first";
}
?>
<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="Q3.php" method="POST">
            Username <input type="text" name="username" value="" placeholder="Type Username"  required/>
            <br>
            Email-id  <input type="email" name="email" value="" placeholder="Type Email-id" required/>
            <br>
            Gender-
            <input type="radio" name="gender" value="Male">Male 
            <input type="radio" name="gender" value="Female">Female 
            <br>
            Select City  <select name="city"> 
            <option value="DehraDun">DehraDun</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
           </select>
           <br>
           <input type="submit" name="submit" value="Click here to Submit">  
        </form>
    </body>
</html>











