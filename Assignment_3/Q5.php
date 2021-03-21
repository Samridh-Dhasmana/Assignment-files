<?php
 include("config.php");
?>
<html>
    <head>
    <title>Detail</title>
    
    <script >
            function ConfirmDelete(Id){
                if(confirm("Are you sure you want to delete?")){
                    location.href = "delete.php?id=" + Id;             
                }
                else{
                    location.href = "Q4.php";
                }
            }
        </script>
    </head>
    <body>
            <form method="POST">
                <label for="username">Username: </label>
                <input type="text" name="username"  placeholder="Enter Username" required><br><br>
                <input type="submit" name="details"  value="SHOW DETAILS"><br><br>
            </form>
            <?php
                if(isset($_POST["details"])){
                    $username=$_POST["username"];
                    $sql = "SELECT * FROM users WHERE username='$username'";
                    $result = mysqli_query($conn, $sql);
                   if($result->num_rows > 0){
                    $row=$result->fetch_assoc(); ?>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th colspan="2">Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["gender"] ?></td>
                                <td><?php echo $row["city"] ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id']?> "> <input type="button" name="edit" value="EDIT"></a> 
                                <input type="button" name="delete" value="DELETE" onclick="ConfirmDelete('<?php echo $row['id']?>');"></td>    
                            </tr>
                        </tbody>
                    </table>   
                    <?php } else {
                    echo "No data found";
                     }
                 }?>
    </body>
</html>