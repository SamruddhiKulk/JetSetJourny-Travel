<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Table</title>
    <style>
         button {
            background-color: orange;
            width: 120px;
            height: 30px;
            margin-bottom: 20px;
        }
        #add {
            text-decoration: none;
            font: 16px;
            color: #fff;
        }
        button :hover {
            cursor: pointer;
        }
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
    <h1>PACKAGE TABLE</h1>
    <button> <a id="add" href = "addPackage.php">Add Package</a></button>
<table>
    <thead>
    <tr>
        <th>Package ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Count Of Days</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
            $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
            if (!$cn) {
              die ("Connection failed: " . mysqli_connect_error());
            }
            $q = "select * from packages";
            $rs = mysqli_query($cn, $q);
            while ($a = mysqli_fetch_array($rs)) {
                extract($a);
                $p_id = $a['p_id'];
                echo "<tr>";
                echo "<td>$p_id</td> <td>$name</td> <td>$image</td> <td>$total_days</td>  <td>$short_desc</td> <td>$price</td> <td> <a href = deletePackage.php?p_id=$p_id>Delete</a> <a href = updatePackage.php?p_id=$p_id>Update</a></td>";
                echo "</tr>";
            }
            ?>

    </tbody>
</table>

</body>
</html>
