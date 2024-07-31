<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package</title>
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
        input[type="number"],
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
        <h2>Add Package</h2>
        
        <a href="packageTable.php" class="close-btn">&#10006;</a>
        <form id="signupForm" method="post">
            <label for="name">Package Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" readonly>
            <br><br>

            <label for="image">Image file:</label>
            <input type="file" id="image" name="image" value="<?php echo $image; ?>" required>
            <br><br>

            <label for="short_desc">Short Description:</label>
            <input type="text" id="short_desc" name="short_desc" value="<?php echo $short_desc; ?>" required>

            <label for="total_days">Total Days:</label>
            <input type="text" id="total_days" name="total_days" value="<?php echo $total_days; ?>" required>
            <br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $price; ?>" required>

            <input type="submit" name="submit" id="submit" value="Update Package">

        </form>

    </div>

    <?php
    if (isset ($_POST['submit'])) {
        // Extract form data
        $name= $_POST['name'];
        $image = $_POST['image'];
        $short_desc = $_POST['short_desc'];
        $total_days = $_POST['total_days'];
        $price = $_POST['price'];

        $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $q = "UPDATE packages SET image='$image', short_desc='$short_desc', total_days='$total_days', price='$price' WHERE name='$name'";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('Package Updated Successfully');window.location='packageTable.php'</script>";
    }

    ?>

</body>

</html>