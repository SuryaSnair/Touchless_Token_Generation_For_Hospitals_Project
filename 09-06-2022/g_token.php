<?php
session_start();
$conn=mysqli_connect("localhost","root","","token");
?>
<?php
if(isset($_POST["Submit"]))
{
$Name=$_POST["Name"];
$Age=$_POST["Age"];
$Dept=$_POST["Dept"];

 if($Dept=="gynecology") {
  $sql="INSERT INTO gynecology VALUES(NULL,'$Name','$Age','$Dept',NULL)";
  if($conn-> query($sql) ===TRUE)
   {
	$id=$conn-> insert_id;
	echo $id;
	header("Location:popup.php?id=".$id);
    
   }
 }
else if($Dept=="ent") {
	$sql="INSERT INTO ent VALUES(NULL,'$Name','$Age','$Dept',NULL)";
	if(mysqli_query($conn,$sql))
	  {
		$id=$conn-> insert_id;
	   echo $id;
	   header("Location:popup.php?id=".$id);
		}
   }
else if($Dept=="paediatrics") {
	$sql="INSERT INTO paediatrics VALUES(NULL,'$Name','$Age','$Dept',NULL)";
	if(mysqli_query($conn,$sql))
		  {
			$id=$conn-> insert_id;
	        echo $id;
	        header("Location:popup.php?id=".$id);
			}
	 }
else if($Dept=="cardiology") {
	 $sql="INSERT INTO cardiology VALUES(NULL,'$Name','$Age','$Dept',NULL)";
	  if(mysqli_query($conn,$sql))
			  {
				$id=$conn-> insert_id;
	            echo $id;
	            header("Location:popup.php?id=".$id);
				}
   }
else if($Dept=="oncology") {
	$sql="INSERT INTO oncology VALUES(NULL,'$Name','$Age','$Dept',NULL)";
	  if(mysqli_query($conn,$sql))
				  {
					$id=$conn-> insert_id;
	                echo $id;
	                header("Location:popup.php?id=".$id);
					}
   }
 
}
?>



<!doctype html>

<html>
	<head>
		<title> Token generation </title>
		<link rel="stylesheet" href="g_token.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<link rel="stylesheet" href="g_token2.css">
		<link rel="stylesheet" href="keyb.css">
		<style>
body
{
	margin:0;
	padding:0;
	background:url("ba.jpg");
	background-size:cover;
	font-family: sans-serif; 
	background-repeat: no-repeat;
    background-attachment: fixed;
}
.loginBox
{
	position:absolute;
	top:50%;
	left:20%;
	transform: translate(-50%, -50%);
	width:450px;
	height:520px;
	padding:80px 40px;
	box-sizing: border-box;
	background:rgba(50, 110, 128, 0.5) ;
	box-shadow: 7px 7px 7px 0px rgba(0,0,0,0.3);
	position: fixed;
	
}
#top {
        position: absolute;
        top: 1%;
        left: 53%;
      }
.button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  color: #fff;
  background-color: #f760d7;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
  margin-left:32%
}

.button:hover {background-color: #f777db}

.button:active {
  background-color: #f777db;
  box-shadow: 0 3px #666;
  transform: translateY(4px);
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

.img{
	position:absolute;
	top:22%;
	left:63%;
	box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.8), 0 12px 26px 0 rgba(0, 0, 0, 0.25);
	position: fixed;
}

</style>
		<script type="text/javascript">
			
			var image_tracker = 'img1';
			
			function change(){
			var image = document.getElementById('data');
			if(image_tracker=='img1'){
			image.src='img2.png';
			image_tracker='img2';
			}
			else if(image_tracker=='img2'){
			image.src='img3.png';
			image_tracker='img3';
			}
			else if(image_tracker=='img3'){
			image.src='img4.png';
			image_tracker='img4';
			}
			else if(image_tracker=='img4'){
			image.src='img5.png';
			image_tracker='img5';
			}
			else if(image_tracker=='img5'){
			image.src='img6.png';
			image_tracker='img6';
			}
			else if(image_tracker=='img6'){
			image.src='img7.png';
			image_tracker='img7';
			}
			else if(image_tracker=='img7'){
			image.src='img8.png';
			image_tracker='img8';
			}
			else if(image_tracker=='img8'){
			image.src='img9.png';
			image_tracker='img9';
			}
			else if(image_tracker=='img9'){
			image.src='img10.png';
			image_tracker='img10';
			}
			else if(image_tracker=='img10'){
			image.src='img11.png';
			image_tracker='img11';
			}
			else if(image_tracker=='img11'){
			image.src='img12.png';
			image_tracker='img12';
			}
			else{
			image.src='img1.png';
			image_tracker='img1';
			}
		}
			
			
			var timer = setInterval('change();',3000); 
			
			// this function is called when the onclick event runs. It stops the timer running.
			function stop(){
			clearInterval(timer); //the clearInterval method stops the timer from running
			}
			
			</script>

	</head>
	<body onload=set_time() >
	<div class="loginBox">
		
		<img src="user.jpg" class="user">
		<h2>Generate Tokens</h2>
<form method="POST" action="">
			<p>Name</p>
			<input type="text" name="Name" class="use-keyboard-input" placeholder="Enter Name" autocomplete="off" required>
			<p>Age</p>
			<input type="text" name="Age" class="use-keyboard-input" placeholder="Enter Age" autocomplete="off" required>
			<p>Department</p>
			<div class="dot">.</div>
			<select name="Dept">
				<option>Select Department:</option>
				<option>gynecology</option>
				<option>ent</option>
				<option>paediatrics</option>
				<option>cardiology</option>
				<option>oncology</option>
			  </select>
			  <div class="dot">.</div>			
		<button type="submit" class="button" name="Submit"> Generate</button>
		<script src="keyb.js"></script>				
		</form>
		
 
  </div>
	<div class="img">
		<img src="img1.png" width="370" height="450"  alt="Hospital department" id="data" onclick="stop();"></img>
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
	<div id="top"><h3><marquee width=150% direction="left">
	<i style='font-size:20px;color:red'>!</i>
    <?php
       if($_GET){
        echo $_GET['notice'];		    
       }
	   else{
		echo "Covid Vaccine is available" ;
	   }
       ?></h3></marquee>
	</div>
	</body>
	<script src="time.js"></script>
</html>