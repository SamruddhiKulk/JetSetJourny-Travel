<?php
$u_id = $_GET["u_id"];
$cn = mysqli_connect("localhost", "root", "", "jetsetjourney");
if (!$cn) {
    die ("Connection failed: " . mysqli_connect_error());
}
$q = "delete from signup where u_id = '$u_id'";
mysqli_query($cn, $q);
mysqli_close($cn);
echo "<script>alert('User Record Deleted Successfully');window.location='userTable.php';</script>";
?>