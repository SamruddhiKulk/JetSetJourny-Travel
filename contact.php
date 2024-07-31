<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact JetSet Journey</title>
    <link rel="stylesheet" href="travel.css">
</head>

<body>
    <form id="contactForm" method="post">
    <div class="connect" id="contact">
        <div class="head">
            <h1>Contact <span>US</span></h1>
        </div>
        <div class="contact">
            <img src="./images/contact_img.jpg" alt="">
            <div class="contactForm">
                <p>Name</p>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                <p>Email</p>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                <p>Add A Message</p>
                <input type ="text" name="query" id="query" placeholder="Enter Here" required>
                <input type="submit" id="submitContact" name="submitContact" value="Send">
            </div>
        </div>
    </div>
    </form>

     <?php
    if (isset ($_POST['submitContact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['query'];
        $cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $q = "INSERT INTO contact (name, email, query) 
          VALUES('$name','$email', '$msg')";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('Sent Your Message Successfully');window.location='contact.php'</script>";
    } 

    ?> 

</body>

</html>