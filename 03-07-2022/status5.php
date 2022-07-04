<?php
include('config.php');
$p_id=$_GET['p_id'];
$Status=$_GET['Status'];
$q="update paediatrics set Status=$Status where p_id=$p_id";
mysqli_query($conn,$q);
$conn->query("DELETE FROM paediatrics WHERE Status=1");
header('location:dept5.php');
?>