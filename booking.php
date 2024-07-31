<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book with JetSet Journey</title>
    <link rel="stylesheet" href="travel.css">
</head>
<body>
    

<div class="book" id="book">
            <div class="head">
                <h1>Book <span>Your Tour Now</span></h1>
            </div>
            <div class="booking">
                <img src="./images/booking_img.avif" alt="">
                <div class="form">
                    <h2>Book Your Tour Now</h2>
                    <br>
                    <form id="bookingForm" method="post">
                    <p>From</p>
                    <input type="text" placeholder="Enter Place" id="placeName" name="placeName" required>
                    <label for="palce">To</label>
                     <br><select id="pacleSelect" name="placeSelect" placeholder="Select">
                        <!-- <option value="select">Select</option> -->
                        <option value="bali">Bali</option>
                        <option value="shimla">Shimla</option>
                        <option value="Manali">Manali</option>
                        <option value="agra">Agra</option>
                        <option value="masoorie">Masoorie</option>
                        <option value="kerla">Kerla</option>
                        <option value="rishikesh">Rishikesh</option>
                        <option value="jammu 7 kasmir">Jammu & Kashmir</option>
                        <option value="shrinagar">Shrinagar</option>
                        <option value="andman">Andman</option>
                        <option value="gao">Goa</option>
                    </select>
                    <!-- <input type="text" placeholder="Enter Place" id="placeInput" > -->
                    <p>Member's</p>
                    <input type="number" value="2" min="1" id="member" name="member" required>
                    <p>Journey Starts ON</p>
                    <input type="date" id="startDate" name="startDate" min="2024-03-22" max="2025-05-30" onfocus="this.min=new Date().toISOString().split('T')[0]" required>
                    <p>Journey Ends ON</p>
                    <input type="date" id="endDate" name="endDate" min="2024-03-22" max="2025-05-30" onfocus="this.min=new Date().toISOString().split('T')[0]" required>
                    <!-- <p>Select flight</p>
                    <select class="form-select" id="cabin" name="flight">
                        <option value="Indigo">Indigo</option>
                        <option value="Air India">Air India</option>
                        <option value="Air Asia">Air Asia</option>
                    </select> -->
                    
                    <p>Select Class</p>
                    <select class="form-select" id="cabin" name="class">
                        <option value="ECONOMY">Economy</option>
                        <option value="PREMIUM_ECONOMY">Premium Economy</option>
                        <option value="BUSINESS">Business</option>
                        <option value="FIRST">First</option>
                    </select>

                    <br>
                    <input type="submit" name="submit" id="submit" value="submit">
                    </form>
                </div>
            </div>
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

        $q = "INSERT INTO bookings (start, end, start_date, end_date, class, members) 
          VALUES('$placeName', '$placeSelect', '$startDate','$endDate', '$class', '$member')";
        mysqli_query($cn, $q);
        mysqli_close($cn);
        echo "<script>alert('booking successful');window.location='index.php'</script>";
    }

    ?>
   
</body>
</html>