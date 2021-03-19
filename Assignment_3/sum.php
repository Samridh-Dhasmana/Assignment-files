<?php
if(isset($_POST['submit']))
{
    $sum=$_POST['v1']+$_POST['v2'];
    echo "SUM is $sum";
}
else{
    echo "no input";
}
?>

<html>
    <head>
        <title>Addition</title>
    </head>
    <body>
        <form action="sum.php" method="POST">
        Number 1 <input type="text" name="v1"  required><br>
        Number 2 <input type="text" name="v2" required><br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>