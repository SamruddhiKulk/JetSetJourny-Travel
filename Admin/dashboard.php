<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: orange;
        }

        .container {
            width: 1300px;
            height: 600px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            width: 700px;
            height: 60px;
            background-color: #fff;
            border-radius: 8px;
            margin: 10px;
            margin-left: 250px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: black;
        }
        .card:hover {
            background-color: #ffdd00;
        }

        h3 {
            margin-top: 0;
        }

        h1 {
            margin-left: 700px;
            font-size: 40px;
            /* text-align: center; */
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1><b>Dashboard</b></h1>
    <div class="container">
        <a href="../admin/userTable.php">

            <div class="card" id="box1">
                <h3>USER</h3>
            </div>
        </a>
        <a href="../admin/placesTable.php">
            <div class="card" id="box2">
                <h3>PLACES</h3>

            </div>
        </a>
        <a href="../admin/packageTable.php">
            <div class="card" id="box3">
                <h3>PACKAGES</h3>

            </div>
        </a>
        <a href="../admin/bookingTable.php">
            <div class="card" id="box4">
                <h3>BOOKING SUMMURY</h3>

            </div>
        </a>
    </div>
</body>

</html>