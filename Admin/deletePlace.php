<?php
$place_id = $_GET["place_id"];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "delete from places where place_id = '$place_id'";
mysqli_query($cn, $q);
mysqli_close($cn);
echo "<script>alert('place Record Deleted Successfully');window.location='placesTable.php';</script>";
?>