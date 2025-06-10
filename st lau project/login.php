<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body><center>
   
    <form action="login.php" method="post" class="log">
        <h2>Login</h2>
        <div class="content">
            <label>Username:</label> <br>
        <input type="text" name="username" required> <br><br><br>
        <label>Password</label> <br>
        <input type="password" name="password" required> <br><br>
        <button type="submit">Login</button><br><br>
        <p>|or</p>
        <h5>You Don't Have an <span><a href="create_account.php">account?</a></span></h5>
        </div>
        
        <?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    //fetch the user from database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ===1) {
        $user = mysqli_fetch_assoc($result);

        //veryfy the password
        if (password_verify($password, $user['password'])) {
            // set sessions variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            echo "login successful. welcome," .htmlspecialchars($user['username']) . "!";

            //Redirect to a dashboard (optional)
            header ("location: dos.php");
            exit();
        }else {
            echo "invalid password .";
        }
    }else{
        echo "invalid username.";
    }
}
mysqli_close($conn);
?>
    </form></center>
</body>
</html>
