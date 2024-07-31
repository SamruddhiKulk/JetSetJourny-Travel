<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
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
      <h1>BOOKING SUMMARY TABLE</h1>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Start</th>
                <th>End</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Members</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
            if (!$cn) {
              die ("Connection failed: " . mysqli_connect_error());
            }
            $q = "select * from bookings";
            $rs = mysqli_query($cn, $q);
            while ($a = mysqli_fetch_array($rs)) {
                extract($a);
                $b_id = $a['b_id'];
                echo "<tr>";
                echo "<td>$b_id</td> <td>$start</td> <td>$end</td>  <td>$start_date</td>  <td>$end_date</td>  <td>$members</td>  <td>$class</td><td><a href = deleteBooking.php?b_id=$b_id>Delete</a> <a href = updateBooking.php?b_id=$b_id>Update</a></td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>


</body>

</html>