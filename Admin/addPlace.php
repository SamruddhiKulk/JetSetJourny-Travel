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
        <h2>Add Place</h2>


        <a href="placesTable.php" class="close-btn">&#10006;</a>
        <form id="signupForm" method="post">
            <label for="name">Place Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>

            <label for="image">Image file:</label>
            <input type="file" id="image" name="image" required>
            <br><br>

            <label for="short_desc">Short Description:</label>
            <input type="text" id="short_desc" name="short_desc" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <input type="submit" name="submit" id="submit" value="Add Place">

        </form>

    </div>

    <?php
    if (isset ($_POST['submit'])) {
        $image="";
        if(isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
        
            $target_directory = "../placeImages/";
            $target_file = $target_directory . basename($file_name);
            
            // Move the uploaded file to the target directory
            if (move_uploaded_file($file_tmp, $target_file)) {
                // File uploaded successfully, store its absolute path in the database
                $absolute_path = realpath($target_file);
                // Assuming you have a table named 'packages' and 'image' is the column where you want to store the absolute path
                $image= $absolute_path; // Assuming 'id' is a unique identifier for your packages
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        // Extract form data
        $name= $_POST['name'];
        $image = $_POST['image'];
        $short_desc = $_POST['short_desc'];
        $price = $_POST['price'];

        $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $q = "INSERT INTO places (name, image, short_desc, price) 
          VALUES('$name', '$image', '$short_desc','$price')";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('Place Added Successfully');window.location='placesTable.php'</script>";
    }

    ?>

</body>

</html>