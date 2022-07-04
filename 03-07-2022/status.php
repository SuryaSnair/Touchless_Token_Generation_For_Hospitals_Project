<?php
include('config.php');
$c_id=$_GET['c_id'];
$Status=$_GET['Status'];
$q="update cardiology set Status=$Status where c_id=$c_id";
mysqli_query($conn,$q);
$conn->query("DELETE FROM cardiology WHERE Status=1");
header('location:dept.php');
?>