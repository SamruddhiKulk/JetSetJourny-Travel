<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: orange;
        }
        h1 {
            text-align: center;
            /* margin-right: 280px; */
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            text-decoration: none;
            color: #000;
        }
        .close-btn:hover {
            color: red;
        }
    </style>
</head>
<body>
<a href="dashboard.php" class="close-btn">&#10006;</a>
    <H1>USER INFORMATION</H1>
<table>
    <thead>
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Email ID</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
            $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
            if (!$cn) {
              die ("Connection failed: " . mysqli_connect_error());
            }
            $q = "select * from signup";
            $rs = mysqli_query($cn, $q);
            while ($a = mysqli_fetch_array($rs)) {
                extract($a);
                $u_id = $a['u_id'];
                echo "<tr>";
                echo "<td>$u_id</td> <td>$f_name</td> <td>$l_name</td>  <td>$dob</td>  <td>$gender</td>  <td>$email</td>  <td>$password</td><td><a href = deleteUser.php?u_id=$u_id>Delete</a> <a href = updateUser.php?u_id=$u_id>Update</a></td>";
                echo "</tr>";
            }
            ?>
    </tbody>
    
</table>

</body>
</html>
