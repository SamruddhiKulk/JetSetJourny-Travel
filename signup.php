<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="travel.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: orange;
            /* background-image: url("./images/background3_img.jpg"); */
            background-size: cover;
           
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            margin-top: 100px;
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
            top: 100px;
            right: 310px;
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

    <div class="container" id="signupDiv">
        <h2>Sign Up</h2>
       
        <br>
        
        <a href="index.php" class="close-btn">&#10006;</a>
        <form id="signupForm" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" max="2024-03-01" onfocus="this.max=new Date().toISOString().split('T')[0]" required>
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
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" id="submit" value="Sign Up">

        
        <p>If you already have an account, <a href="login.php">login here</a>.</p>
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

        $q = "INSERT INTO signup (f_name, l_Name, dob, gender, password, email) 
          VALUES('$firstName', '$lastName', '$dob', '$gender', '$password', '$email')";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('registration successful');window.location='login.php'</script>";
    }

    ?>

    <!-- <script>
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Get form values
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var dob = document.getElementById('dob').value;
        var gender = document.getElementById('gender').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // You can perform additional validation here before sending the data
        // For simplicity, let's just log the values for now
        console.log("First Name:", firstName);
        console.log("Last Name:", lastName);
        console.log("Date of Birth:", dob);
        console.log("Gender:", gender);
        console.log("Email:", email);
        console.log("Password:", password);

        // Here you can send the form data to your server using AJAX or any other method
        // For demonstration purposes, let's just alert a success message
        alert("Sign up successful!");
    });
</script> -->

</body>

</html>