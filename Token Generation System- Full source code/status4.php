<?php
include('config.php');
$o_id=$_GET['o_id'];
$Status=$_GET['Status'];
$q="update oncology set Status=$Status where o_id=$o_id";
mysqli_query($conn,$q);
$conn->query("DELETE FROM oncology WHERE Status=1");
header('location:dept4.php');
?>