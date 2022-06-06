<!doctype html>

<html>
	<head>
		<title> Token generation </title>
		<link rel="stylesheet" href="3c.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="cal_notice.css">
	</head>
	<body onload=set_time() >
	<div class="loginBox">
		
		<h2>CARE Hospital</h2>
		<form>
			<p>Date</p>
			<input type="date"  name="">
			<p>Notice</p>
			<input type="textbox" name = "" placeholder="Enter Age">
			<input type="submit" name = "" value="Start"> 
			
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
		<img src="doc.png" width="490" height="543"  alt="Hospital department"></img>
	</div>
	</body>
	<script src="3b.js"></script>
</html>