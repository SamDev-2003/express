<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <table>
        <tr class="menu-top">
            <td>
                <h4 class="logo">All users</h4>
            </td>
            <td>
              <?php
              $fetch = mysqli_query($conn, "SELECT * FROM users LIMIT 1");
              if ($fetch && mysqli_num_rows($fetch) > 0) {
                  $row = mysqli_fetch_assoc($fetch);
                  // Show first letter of username in uppercase and full username
                  echo "<p class='second'>" . strtoupper($row['username'][0]) . "</p>";
                  echo "<p class='second'>" . htmlspecialchars($row['username']) . "</p>";
              }
              ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="result">
                <table border="1" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                    <?php
                    $stmt2 = mysqli_query($conn, "SELECT * FROM users");

                    if ($stmt2 && mysqli_num_rows($stmt2) > 0) {
                        while ($data = mysqli_fetch_assoc($stmt2)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($data['userid']) . "</td>";
                            echo "<td>" . htmlspecialchars($data['username']) . "</td>";
                            echo "<td>" . htmlspecialchars($data['password']) . "</td>";
                            echo "<td><a href='edit.php?id=" . urlencode($data['userid']) . "'><button class='logout1'>Edit</button></a></td>";
                            echo "<td><a href='remove.php?id=" . urlencode($data['userid']) . "'><button class='logout2'>Remove</button></a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>0 Users recorded.</td></tr>";
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
