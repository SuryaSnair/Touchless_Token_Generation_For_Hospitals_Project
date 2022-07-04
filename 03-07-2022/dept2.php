<?php 
if(isset($_SERVER['HTTPS'])&& $_SERVER['HTTPS']==='on')
{
$url="https://";
}
else{
  $url="http://";
  $url.=$_SERVER['HTTP_HOST'];
  $url.=$_SERVER['REQUEST_URI'];
  $url;
}
$page=$url;
$sec="10";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="<?php echo $sec; ?>" URL="<?php echo $page; ?>">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="g_token.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>View </title>
    <style>
 .header img {
  float: left;
  width: 100px;
  height: 100px;
  background: #555;
}

.header h1 {
  position: relative;
  top: 18px;
  left: 10px;
  
}
img {
  border-radius: 50%;
  border: 2px solid #555;
}
.colons{
  position:absolute;
  top: 10px;
  right:230px;
}
.button_1 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color:#13bf3e; 
  color: white; 
  height:30px;
  width:80px;
}
.button_2 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color: #3486eb; 
  color: white; 
  height:30px;
  width:80px;
}
.button_3 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color: #fa9e1e; 
  color: white; 
  height:30px;
  width:80px;
}
.button_4 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color:#d90d0d; 
  color: white; 
  height:30px;
  width:80px;
}
.button_4:hover {background-color:#d90d0d; 
}

.button_4:active {
  background-color:#d90d0d; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_1:hover {background-color:#13bf3e; 
}

.button_1:active {
  background-color:#13bf3e; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_2:hover {background-color: #3486eb; 
}

.button_2:active {
  background-color: #3486eb; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_3:hover {background-color:#fa9e1e; 
}

.button_3:active {
  background-color:#fa9e1e; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}

.button_0 {
  background-color: #7d4bb3; 
  color: black; 
  border: 2px solid #3d1b61;
}

.button_0:hover {
  background-color:#3d1b61;
  color: white;
}
.button2 {
  background-color: #5abee6; 
  color: black; 
  border: 2px solid #7d0b0b;
}

.button2:hover {
  background-color:#517fdb;
  color: white;
}
a:link { text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }


a{
color: white;
text-decoration: none;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #19225c;
  color: white;
}
</style>
</head>
<body >

<section>
        <span class="colons"><a href="index.php"><i class="fa fa-sign-out" style="font-size:24px;color:black"></i></a></span> 
        <div class="container">
            <div class="time">
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num hour_num">08</span>
                        <span class="text">Hours</span>
                    </div>
                    <span class="colon">:</span>
                </div>
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num min_num">45</span>
                        <span class="text">Minutes</span>
                    </div>
                    <span class="colon">:</span>
            </div>
            <div class="time-colon">
                <div class="time-text">
                    <span class="num sec_num">06</span>
                    <span class="text">Seconds</span>
                </div>
                <span class="am_pm">AM</span>                      
        </div>        
</section>
<div class="header">
  <img src="gyne.png" alt="logo" />
  <h1 style="color:powderblue;">Gynecology Department</h1>
</div>
<?php

$conn=mysqli_connect("localhost","root","","token");
$query2=mysqli_query($conn,"SELECT * FROM gynecology ");
if(mysqli_num_rows($query2))
{
echo "<table><tr><th>Token Number</th><th>Name</th><th>Age</th><th>Doctor</th><th>Date</th><th>Status</th></tr>";
while($r=mysqli_fetch_assoc($query2))
{?>
<tr>
<td><?php echo $r["g_id"]; ?></td>
<td><?php echo $r["Name"]; ?></td>
<td><?php echo $r["Age"]; ?></td>
<td><?php echo $r["Doctor"]; ?></td>
<td><?php echo $r["Time"]; ?></td>
<td><?php
if($r['Status']==0){
echo '<button class="button_1"><a href="status2.php?g_id=' .$r['g_id'].'&Status=1">Visit</a></button>';
  }
?></td>
  
</tr>
<?php
}
echo "</table>";
}
else
{
echo "";
}
?>

</body>
<script src="time.js"></script>
</html>