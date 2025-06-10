<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
   session_start();

   //destroy all session data
   session_unset();
   session_destroy();

   echo"you have been logged out.";
   //Redirect to login page(optional)
   header("Location:login.php");
   exit();
   ?> 
</body>
</html>