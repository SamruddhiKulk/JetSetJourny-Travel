<?php
$b_id = $_GET["b_id"];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "delete from bookings where b_id = '$b_id'";
mysqli_query($cn, $q);
mysqli_close($cn);
echo "<script>alert('Booking Record Deleted Successfully');window.location='bookingTable.php';</script>";
?>