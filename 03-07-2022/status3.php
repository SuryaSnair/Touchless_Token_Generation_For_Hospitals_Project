<?php
include('config.php');
$e_id=$_GET['e_id'];
$Status=$_GET['Status'];
$q="update ent set Status=$Status where e_id=$e_id";
mysqli_query($conn,$q);
$conn->query("DELETE FROM ent WHERE Status=1");
header('location:dept3.php');
?>