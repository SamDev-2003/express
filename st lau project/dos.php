<?php
session_start();

if (!isset($_SESSION['user_id'])) {
   echo "Access denied. Please log in.";
    //redirect to login page
    header ("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dos</title>
</head>
<body>
    
        <div class="menu"> 
            <h1>Dos Management Room</h1>
            <div class="nav">
               <a href="#">Modules</a>
               <a href="#">Classes</a>
               <a href="#">Trainers</a>
               <a href="#">Time Table</a>
               <a href="#">Observation</a>
               <a href="#">Trainees</a>
               <a href="logout.php">Logout</a>
            </div>
        
        </div>

    <!-- this is the modules div -->
     <div id="modules">
        <h1>Modules</h1>
        <h2>Create the Module</h2>
        
            <button onclick="display()">Create New Module</button> <button>Module List</button>
            
        <form action="registermodule.php" id="dis" class="log" method="post">
            <div class="content">
            <label for="">Module Code</label><br>
            <input type="text" name="mcode" required><br>
            <label for="">Module Name</label><br>
            <input type="text" name="mname" required><br>
            <label for="">Module Type</label><br>
            <input type="text" name="mtype" required><br>
            <button>Create </button>
            </div>
            
        </form>

   
     </div>
<script>
    function display{
        document.getElementById('dis').style.display = 'block';
    }
</script>
</body>
</html>

