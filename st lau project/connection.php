<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname ="work";

    $conn =mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Database connection failed:".mysqli_connect_error());
    }

$sql = "CREATE TABLE works(
m_id INT PRIMARY KEY NOT NULL,
mcode VARCHAR(50) NOT NULL,
mname VARCHAR(60) NOT NULL,
mtype VARCHAR(80) NOT NULL,
trainerid VARCHAR(50) NOT NULL FOREIGN KEY,

FOREIGN KEY(trainerid) REFERENCE (trainers) ON DELETE CASCADE
)";   

if(mysqli_query($conn,$sql)) {
    die( 'connected successfull');
}



    ?>
</body>
</html>