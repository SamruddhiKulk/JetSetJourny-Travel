<?php
$u_id = $_GET['u_id'];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "SELECT * FROM signup WHERE u_id = '$u_id'";
$rs = mysqli_query($cn, $q);
$u_id = "";
$f_name = "";
$l_name = "";
$dob = "";
$gender = "";
$email = "";
$password = "";
if ($a = mysqli_fetch_array($rs)) {
    $u_id = $a["u_id"];
    $f_name = $a["f_name"];
    $l_name =  $a["l_name"]; 
    $dob =  $a["dob"];
    $gender =  $a["gender"];
    $email =  $a["email"];
    $password =  $a["password"];
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

        <a href="userTable.php" class="close-btn">&#10006;</a>
        <form id="signupForm" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $f_name; ?>" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $l_name; ?>" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" required>
            <br>
            <br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" readonly>

            <input type="submit" name="submit" id="submit" value="Update User">

        </form>

    </div>

    <?php
    if (isset ($_POST['submit'])) {
        // Extract form data
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $q = "UPDATE signup SET f_name='$firstName', l_name='$lastName', dob='$dob', gender='$gender' WHERE email='$email'";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('User Information Updated Successfully');window.location='userTable.php'</script>";
    }

    ?>

</body>

</html>

<!-- <?php
include ("footer.php");
if (isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $liscenceNo = $_POST['liscenceNo'];
    $location = $_POST['location'];
    include ("connection.php");
    $q = "update registration set Contact = '$contact', LiscenceNo = '$liscenceNo', Location = '$location' where Name = '$name'";
    mysqli_query($cn, $q);
    mysqli_close($cn);
    echo "<script>alert('BloodBank Record Updated successful');window.location='ManageBloodBanks.php'</script>";
}

?> -->