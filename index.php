<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JesSet Journey</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="travel.css">
</head>
<body>
    <?php 
    include("header.php");
    ?>
    <?php
    include("booking.php");
    ?>
    <?php
    include("packages.php");
    ?>
    <?php
    include("places.php");
    ?>
    <?php
    include("contact.php");
    ?>
    <?php
    include("payment.php");
    ?>
    <?php
    include("footer.php");
    ?>
    
    <!-- <div class="container1">
        <nav>
            <div class="logo">
                <h1>JetSet Journey</h1>
            </div>
            <ul id="navList" class="list">
                <li><a href="">Home</a></li>
                <li><a href="#book">Book</a></li>
                <li><a href="#package">Package's</a></li>
                <li><a href="#place">Best Places</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="#payment">Payment</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <div class="icons">
                <i id="bar"  class="fa-solid fa-bars"></i>
                
                <a href="signup.php">
                    <i class="fas fa-user-plus"></i>
                  </a>
            </div>
        </nav>
        <div class="main">
            <div class="maintext">
                <h1>It's A Big World <br> Out There, Go <br> Explore</h1>
                <button><a href="#place">Explore</a></button>
  
            </div>
        </div>
        <div class="book" id="book">
            <div class="head">
                <h1>Book <span>Your Tour Now</span></h1>
            </div>
            <div class="booking">
                
              
                <div class="form">
                    <img src="./images/booking_img.avif" alt="">
                    <h2>Book Now</h2>
                    <form id="bookingForm" action="#" method="post">
                        <label for="from">From:</label>
                        <input type="text" id="from" name="from" required>
                
                        <label for="to">To:</label>
                        <select name="to" id="to" required>
                            <option value="">Select Destination</option>
                            <option value="bali">Bali</option>
                            <option value="shimla">Shimla</option>
                            <option value="manali">Manali</option>
                            <option value="agra">Agra</option>
                            <option value="massorie">Massorie</option>
                            <option value="kerla">Kerla</option>
                            <option value="andaman">Andaman</option>
                            <option value="rishikesh">Rishikesh</option>
                            <option value="shrinagar">Shrinagar</option>
                            <option value="goa">Goa</option>
                            <option value="jammu_kashmir">Jammu & Kashmir</option>
                        </select>
                
                        <label for="journeyStartDate">Journey Start Date:</label>
                        <input type="date" id="journeyStartDate" name="journeyStartDate" required>
                
                        <label for="journeyEndDate">Journey End Date:</label>
                        <input type="date" id="journeyEndDate" name="journeyEndDate" required>
                
                        <label for="members">Number of Members:</label>
                        <input type="number" id="members" name="members" min="1" required>
                
                        <label for="class">Class:</label>
                        <select name="class" id="class" required>
                            <option value="">Select Class</option>
                            <option value="economy">Economy</option>
                            <option value="business">Business</option>
                            <option value="premium_economy">Premium Economy</option>
                            <option value="first">First</option>
                        </select>
                
                        <input type="submit" value="Book Now">
                    </form>
                
                </div>
            </div>

        </div>

        <div class="pack" id="package">
            <div class="head">
                <h1>Best <span>Packages</span></h1>
            </div>
            <div class="packages">
                <div class="card">
                    <img src="./images/plan1_imgs.jpg" alt="">
                    <h3>Shimla</h3>
                    <p>Quaint hill station in Himachal Pradesh, India</p>
                    <p>2 Week Tour</p>
                    <p><b>200000.00 Only</b></p>

                </div>
                <div class="card">
                    <img src="./images/plan2_imgs.jpg" alt="">
                    <h3>Manali</h3>
                    <p>Scenic Himalayan retreat in Himachal Pradesh, India </p>
                    <p>5 Days Tour</p>
                    <p><b>80000.00 Only</b></p>
                    

                </div>
                <div class="card">
                    <img src="./images/plan3_img.jpg" alt="">
                    <h3>Bali</h3>
                    <p>Exotic island paradise in Indonesia's archipelago</p>
                    <p>1 Week Tour</p>
                    <p><b>100000.00 Only</b></p>

                </div>
            </div>
        </div>

        <div class="best" id="place">
            <div class="head">
                <h1>Explore <span>Best Places</span></h1>
            </div>
            <div class="places">
                <div class="placeCard">
                    <img src="./images/p1_img.jpg" alt="">
                    <h3>Agra, India</h3>
                    <p>Taj Mahal's timeless elegance</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p2_img.jpg" alt="">
                    <h3>Manali, India</h3>
                    <p>Snowy paradise in Himachal Pradesh</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p3_img.jpg" alt="">
                    <h3>Kerla, India</h3>
                    <p>Backwaters and lush greenery</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p4_img.jpg" alt="">
                    <h3>Massorie, India</h3>
                    <p>Hill station charm in Uttarakhand</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p5_img.jpg" alt="">
                    <h3>Goa, India</h3>
                    <p>Sun, sand, and vibrant culture</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p6_img.jpg" alt="">
                    <h3>Jammu & Kashmir, India</h3>
                    <p>Paradise in the Himalayas</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p7_img.jpg" alt="">
                    <h3>Shrinagar, India</h3>
                    <p>Jewel of the Kashmir Valley</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p8_img.jpg" alt="">
                    <h3>Andman, India</h3>
                    <p>Tropical bliss in the Bay</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
                <div class="placeCard">
                    <img src="./images/p9_img.jpg" alt="">
                    <h3>Rishikesh, India</h3>
                    <p>Yoga capital by Ganges River</p>
                    <p>Rs. <b>10,000</b> Night</p>
                </div>
            </div>
        </div>

        <div class="connect" id="contact">
            <div class="head">
                <h1>Contact <span>US</span></h1>
            </div>
            <div class="contact">
                <img src="./images/contact_img.jpg" alt="">
                <div class="contactForm">
                    <p>Name</p>
                    <input type="text" placeholder="Enter Your Name">
                    <p>Email</p>
                    <input type="eamil" placeholder="Enter Your Email">
                    <button>Connect</button>
                </div>
            </div>
        </div>

        <div class="qrCode"  id="payment">
            <div class="box">
                <h1>Make <span>Payments Here</span></h1>
                <div class="qrbox">
                <img src="./images/paymentQr.jpg" alt="">
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="text">
                <h3>About US</h3>
                <p>Embark on a journey with us, <br>
                    Where dreams take flight and memories are made. <br>
                    From majestic mountains to sun-kissed shores, <br>
                    Explore the world with ease and delight. <br>
                    Book now and let your adventure begin! <br>&#169; </p>
                <p></p>
                <p></p>
                <p></p>
            </div>

            <div class="text">
                <h3>Tour</h3>
                <p>Quality</p>
                <p>Price</p>
                <p>Affordable</p>
                <p>Exchange</p>
            </div>

            <div class="text">
                <h3>Travell</h3>
                <p>safety</p>
                <p>Good hotels</p>
                <p>Quality</p>
                <p>Assurence</p>
            </div>

            <div class="text">
                <h3>Address</h3>
                <p>99-666-5454</p>
                <p>Galaxy Park</p>
                <p>Ring Road</p>
                <p>Pune</p>
            </div>
        </div>

        <div class="loginPage">
            <form action="">
                <input type="text" placeholder="Enter Email" id="email"><br>
            <input type="password" placeholder="Enter Password" id="pass"><br>
            <button type="submit" id="loginBtn">Log In</button>
            </form>
        </div>
    </div> -->
    <!-- <script src="travel.js"></script> -->
    
</body>
</html>