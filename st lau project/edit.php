<?php
include 'connection.php';
$id=$_GET['id'];
$sel=mysqli_query($conn,"SELECT*FROM users WHERE id='$id';");
$username=$_POST['username'];
$password=$_POST['password'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>tessa</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <form method="POST" action="edited.php" class="log">
            <h4>EDIT</h4>
            <div class="content">
                     <input type="hidden" name="id" value="<?php echo"$id";?>">
        <label class="label">First name</label><br>
        <input type="text" class="input" value="<?php echo"$username";?>"  name="username" required ><br><br
        <label class="label">Password</label><br>
        <input type="password" class="Password" value="<?php echo"$password";?>" name="password" required><br><br>
        <input type="submit"  value="edit" class="submit" >
    
            </div>
       
    </form> 
    </center>
    </body>

</html>

