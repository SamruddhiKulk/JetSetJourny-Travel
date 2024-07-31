<?php
session_start(); // Start session

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $q = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn, $q);
    if ($a = mysqli_fetch_array($result)) {
        $_SESSION['email'] = $email;
        $q2 = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
        mysqli_query($cn, $q2);
        echo "<script>alert('Login successful');window.location='places.php'</script>";
    } else {
        echo "<center><b><font color=red>Incorrect email or Password</font></b></center>";
    }
    mysqli_close($cn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include any CSS stylesheets if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: orange;
            /* background-image: url("./images/background3_img.jpg");
      background-size: cover; */
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 150px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: orange;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: orange;
        }

        .close-btn {
            position: absolute;
            top: 160px;
            right: 570px;
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

    <div class="container">
        <h2>Login</h2>

        <a href="index.php" class="close-btn">&#10006;</a>
        <form id="loginForm" method="post">
            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Email id" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <input type="submit" name="submit" id="submit" value="login">
        </form>
        <p>If you don't have an account, <a href="signup.php">sign up here</a>.</p>
    </div>

</body>

</html>
