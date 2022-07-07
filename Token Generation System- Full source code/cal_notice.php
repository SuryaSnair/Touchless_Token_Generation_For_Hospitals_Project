<?php
session_start();
$conn=mysqli_connect("localhost","root","","token");
?>
<?php
if(isset($_POST["submit"]))
{
$date=$_POST["date"];
$notice=$_POST["notice"];
$sql1="TRUNCATE TABLE cardiology";
mysqli_query($conn, $sql1);
$sql2="TRUNCATE TABLE ent";
mysqli_query($conn, $sql2);
$sql3="TRUNCATE TABLE gynecology";
mysqli_query($conn, $sql3);
$sql4="TRUNCATE TABLE oncology";
mysqli_query($conn, $sql4);
$sql="TRUNCATE TABLE paediatrics";
if($conn-> multi_query($sql)===TRUE)
   {
	header("Location:g_token.php?notice=".$notice);    
   }
 }
 ?>
<!doctype html>

<html>
	<head>
		<title> Token generation </title>
		<link rel="stylesheet" href="time.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="cal_notice.css">
        <style>
            
.loginBox button
{
	border:none;
	outline:none;
	height: 40px;
    width: 100px;
	color:#fff;
	font-size:20px;
	background: rgb(89, 146, 169);
	cursor:pointer;
	border-radius:20px;
}


.loginBox button:hover
{
	background: #415865;
	color: #262626;
}
 .loginBox
{
	position:absolute;
	top:56.5%;
	left:34%;
	transform: translate(-50%, -50%);
	width:490px;
	height:538px;
	padding:80px 40px;
	box-sizing: border-box;
	background:rgba(66, 66, 66, 0.5) ;
	
    box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.8), 0 12px 26px 0 rgba(0, 0, 0, 0.25);
	
}
.img{
	position:absolute;
	top:14%;
	left:52%;
	box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.8), 0 12px 26px 0 rgba(0, 0, 0, 0.25);
  
}


        </style>
	</head>
	<body onload=set_time() >
	<div class="loginBox">
		
		<h2>CARE Hospital</h2>
		<form method="POST" action=" ">
			<p>Date</p>
			<input type="date"  name="date">
			<p>Notice</p>
			<input type="textbox" name ="notice" placeholder="Enter notice" autocomplete="off">
            <button type="submit" name="submit">Start</button>
			
		</form>
	</div>
	<section>
        <span class="colon"><a href="login.php"><i class="fa fa-sign-out" style="font-size:24px;color:black"></i></a></span> 
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
    <div class="img">
		<img src="doc.png" width="490" height="538"  alt="Hospital department"></img>
	</div>
	</body>
	<script src="time.js"></script>
</html>