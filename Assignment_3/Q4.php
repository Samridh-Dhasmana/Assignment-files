<?php
    include('config.php');
?>
<?php
 $sql = "SELECT * FROM `users`";
 $result=mysqli_query($conn,$sql);
 if($result->num_rows > 0){ 
     ?>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>CITY</th>
            </tr>
        </thead>
        <tbody>
           <?php while($row=$result->fetch_array()) { ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
            </tr>
           <?php } ?>
        </tbody>
     </table>
<?php }
?>
<html>
    <head>
        <title>User detail</title>
    </head>
    <body>
    
    </body>
</html>
