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
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Token Generation Webpage</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
<style>
 /*set border to the form*/
     
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
        padding: 16px;
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
</style>
</head>
<body>
	
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
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">About us</a></li>
					        <li><a class="menu" href="#service">Our services </a></li>
					        <li><a class="menu" href="login.php">Generate Token</a></li>
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

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Care</h2>
		               			<p>We care for your health by providing 24x7 hour highquality service </p>
		               			<button><a href="#service">learn more</a></button>
			                </div>
			            </div>
                        <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Commitment</h1>
		               			<p>Our commitment to help restore your health is ironclad in our pledge </p>
		               			<button><a href="#service">learn more</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Dignity</h1>
		               			<p>our protocols extend dignity and compassion to patients throughout the treatment journey</p>
		               			<button><a href="#service">learn more</a></button>
			                </div>
			            </div>
                        <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Compassion</h1>
		               			<p>our protocols extend dignity and compassion to patients throughout the treatment journey</p>
		               			<button><a href="#service">learn more</a></button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4>Our focus on enabling patients to take control of their lives continues with the same commitment, aided with cutting edge technology and advances in healthcare. As a reputed multidisciplinary hospital in Trivandrum, we offer patients affordable access to various medical and surgical specialties at a single location.Our patient-centric healthcare services, ethics, professional standards, utilization of technology, and pioneering procedures remain focused on outcomes to heal and bring smiles to your patients.
					Driven by the passion to create and offer a healing environment; every interaction, diagnosis and procedure at Lords are the finest examples of the “care” in healthcare.</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Cardiology specialist</h3>
							<p>Our legacy as a pioneer in cardiac care continues to heal, and save lives with advanced interventions for enhanced cardiovascular health. Highly trained and competent teams respond to cardiac emergencies, helping save lives in the golden hour. Our state of preparedness and expertise help prevent fatalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>G</h1>
							</div>

							<h3>Obstetrics & Gynecological specialist</h3>
							<p>Services extend across all conditions of reproductive tract of women – from reproductive medicine, pelvic floor disorders, gynaecological oncology, to all obstetric services.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>O</h1>
							</div>
							<h3>Oncology specialist</h3>
							<p>Our integrated approach to handle oncological conditions through expert multidisciplinary teams helps in early detection, prevention and treatment of cancer. We help our patients lead an independent, dignified life with advanced oncological interventions for cancer of the kidney, bladder, prostate, and testis among others.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Everything we do as an institution is a part of a mission to contribute to the society and impact lives positively. This reflects every single day, as we cater to patients across various economic backgrounds, without any impact on the quality of healthcare, services, or outcomes.</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Cardiology</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>Nephrology</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>Orthopaedics & Sports Medicine</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>Pulmonology</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our team</h2>
					<h4> Being a doctor is one of the noblest professions, they heal the sick and also are tasked with making life saving decisions. In these trying times during the corona pandemic, the world witnessed as to how selflessly doctors across the world served the people at large and emerged as true heroes.</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. M. Weiner, M.D.</h3>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Danielle, M.D.</h3>
							</div>
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Caitlin, M.D.</h3>
								</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Joseph, M.D.</h3>
								</div>
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
								</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
								</div>
					<div class="person">
						<img class="img-responsive" src="img/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Sunday :</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> SS Street ,Statue, Trivandrum</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> 9567890004</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Land Phone:</span> 0471-2458902</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@care.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>Leave us a Message</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

</script>	
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>