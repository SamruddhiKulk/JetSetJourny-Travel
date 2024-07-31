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
        display: flex;
        justify-content: center;
        background-image: url(/images/signup3_img.jpeg);
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
        height: 400px;
        width: 800px;
        margin-top: 150px;
    }
    .card {
        width: 600px;
        /* height: 800px; */
        background-color: #fff;
        border-radius: 8px;
        margin: 10px;
        padding: 20px;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    }
    h2 {
        margin-top: 0;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label {
        margin-bottom: 6px;
        margin-top: 20px;
        height: 30px;
    }
    input[type="submit"] {
        background-color: orange;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 30px;
        height: 30px;
    }
    input[type="submit"]:hover {
        background-color: orange;
    }
    .close-btn {
    position: absolute;
    top: 190px;
    right: 466px;
    font-size: 20px;
    text-decoration: none;
    color: #000;
}
</style>
</head>
<body>
<div class="container">
    <div class="card">
        <a href="index.php" class="close-btn">&#10006;</a>
        <h2>Sign Out</h2>
        <form action="signout.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Sign Out">
        </form>
    </div>
</div>
</body>
</html>
