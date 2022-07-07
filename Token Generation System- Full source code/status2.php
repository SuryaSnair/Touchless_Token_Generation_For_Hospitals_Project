<?php
include('config.php');
$g_id=$_GET['g_id'];
$Status=$_GET['Status'];
$q="update gynecology set Status=$Status where g_id=$g_id";
mysqli_query($conn,$q);
$conn->query("DELETE FROM gynecology WHERE Status=1");
header('location:dept2.php');
?>