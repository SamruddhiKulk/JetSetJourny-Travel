<?php
$p_id = $_GET["p_id"];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "delete from packages where p_id = '$p_id'";
mysqli_query($cn, $q);
mysqli_close($cn);
echo "<script>alert('Package Record Deleted Successfully');window.location='packageTable.php';</script>";
?>