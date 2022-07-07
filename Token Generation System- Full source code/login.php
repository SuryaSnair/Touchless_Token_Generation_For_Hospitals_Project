<?php
session_start();
$conn=mysqli_connect("localhost","root","","token");
?>
<?php
if(isset($_POST["submit"]))
{
$uname=$_POST["uname"];
$psw=$_POST["psw"];

if($uname=="gynecology" && $psw=="1234") {

	header("Location:dept2.php");
 }
else if($uname=="ent" && $psw=="1234") {
	   header("Location:dept3.php");
   }
else if($uname=="paediatrics" && $psw=="1234") {
	
	        header("Location:dept5.php");
	 }
else if($uname=="cardiology" && $psw=="1234") {
	            header("Location:dept1.php");
				}
else if($uname=="oncology" && $psw=="1234") {
	             header("Location:dept4.php");
					}
else if($uname=="admin" && $psw=="1234") {
						header("Location:admin.php");
						   }
else{
	echo '<script>alert("Incorrect password or username")</script>';
}
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
<style>
.username, .password{
    border: 2px solid  rgb(109, 174, 202);
}
 /*set border to the form*/
 .text, .box{
    margin-top: 55vh;
    flex: 1;
}
  
 .forms{
        border: 3px solid #f1f1f1;
		width:20%;
		height:50%;
		left:78%;
		position:absolute;
		background:white;
    }
    /*assign full width inputs*/
     
  .up {
        width: 17%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
     
	.buttn {
        background-color:#2f43c4;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20.5%;
    }
    .buttn:hover {
        opacity: 0.8;
    }
    
    /*centre the display image inside the container*/
     
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
     
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/
     
    .container {
        padding: 14px;
    }
    /*set the forgot password text*/
     
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
     
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
    
html, body { overflow: hidden}

</style>
</head>
<body><main>
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.php"><img src="img/lo.jpg" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu " href="index.php" >Home</a></li>
					        <li><a class="menu" href="index.php">About us</a></li>
					        <li><a class="menu" href="index.php">Our services </a></li>
					        <li><a class="menu active" href="#">Generate Token</a></li>
					        <li><a class="menu" href="#">
							<span onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
							Login</span></a></li>
    <div id="id01" class="modal">
 
        <form class="forms" method="POST" action="">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img/slide-two.jpg" alt="Avatar" class="avatar">
            </div>
 
            <div class="container">
                <label><b>Username</b></label>
				
                <input class="up" type="text" placeholder="Enter Username" name="uname"  autocomplete=off required></br>
 
                <label><b>Password</b></label>
                <input class="up" type="password" placeholder="Enter Password" name="psw" required></br>
 
               <button name="submit" class="buttn" type="submit">Login</button>
            </div>
             </form>
    </div>
 
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

        <div class="background">
            <div class="box">
                <form class="form" action="cal_notice.php" >
                    <input type="text" name= "Username" class="username" placeholder="Username" autocomplete="off" required>
                    <input type="password" name="Password" class="password" placeholder="Password" required>
                    <input type="submit" name="Submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
</body>
</html>