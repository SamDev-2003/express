<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register User</title>
</head>
<body> 
    <form action="create_account.php" method="post" class="log">
    <h2>Register New user</h2>
    <div class="content">
         <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"  required><br><br>
        <label for="">Roles</label>
        <select name="roles" id="" required>
            <option value="admin">Admin</option> 
            <option value="trainee">Trainee</option> 
            <option value="student">Student</option>
        </select>
    
        <button type="submit">Register</button>
    </div>
    </form>   
        <?php

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $roles = $_POST['roles'];

    //Hash the password for security
 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 $sql = "INSERT INTO users (username, password, roles) VALUES ('$username', '$hashed_password', '$roles')";

 if (mysqli_query($conn, $sql)) {
    echo "User registered successfully.";
 } else {
    echo "Error: " .mysqli_error($conn);
 }
}
 mysqli_close($conn);
?>
    
</body>
</html>
