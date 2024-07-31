<?php
$u_id = $_GET['u_id'];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "SELECT * FROM bookings WHERE b_id = '$b_id'";
$rs = mysqli_query($cn, $q);
$b_id = "";
$start = "";
$end = "";
$members = "";
$tart_date = "";
$end_date = "";
$class = "";
if ($a = mysqli_fetch_array($rs)) {
    $b_id = $a["b_id"];
    $start = $a["start"];
    $end = $a["end"];
    $members = $a["members"];
    $start_date = $a["start_date"];
    $end_date = $a["end_date"];
    $class = $a["class"];
}
?>

<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url("./images/background3_img.jpg");
            background-size: cover;
            background-color: #ffc300;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: orange;
        }

        .close-btn {
            position: absolute;
            top: 60px;
            right: 320px;
            font-size: 20px;
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container" id="signupDiv">
        <h2>Update User</h2>

        <a href="bookingTable.php" class="close-btn">&#10006;</a>
        <form id="signupForm" method="post">
            <label for="start">Start:</label>
            <input type="text" id="start" name="start" value="<?php echo $start; ?>" required>

            <label for="end">End:</label>
            <input type="text" id="end" name="end" value="<?php echo $end; ?>" required>

            <label for="members">members:</label>
            <input type="number" id="members" name="members" value="<?php echo $members; ?>" required>
            <br>
            <br>

            <label for="start_date">Email:</label>
            <input type="date" id="start_date" name="start_date" value="<?php echo $start_date; ?>" required>

            <label for="end_date">Password:</label>
            <input type="date" id="end_date" name="end_date" value="<?php echo $end_date; ?>" required>

            <p>Select Class</p>
            <select class="form-select" id="cabin" name="class">
                <option value="ECONOMY">Economy</option>
                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                <option value="BUSINESS">Business</option>
                <option value="FIRST">First</option>
            </select>

            <input type="submit" name="submit" id="submit" value="Update Booking">

        </form>

    </div>

   
<?php
        if (isset ($_POST['submit'])) {
        // Extract form data
        $placeName = $_POST['placeName'];
        $placeSelect = $_POST['placeSelect'];
        $member = $_POST['member'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $class = $_POST['class'];

        $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $q = "UPDATE booking SET start='$start', end='$end', members='$members', start_date='$start_date', end_date='$end_date', class='$class'  WHERE email='$email'";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('Booking Updated Successfully');window.location='bookingTable.php'</script>";
    }

    ?>
   

</body>

</html>

