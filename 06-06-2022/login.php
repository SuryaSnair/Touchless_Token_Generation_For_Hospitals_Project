<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['Submit'])) {
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM login WHERE Username='$Username' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Username'] = $row['Username'];
		header("Location: cal_notice.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
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
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="box">
                <form class="form" action="" method="POST">
                    <input type="text" name= "Username" class="username" placeholder="Username" required>
                    <input type="password" name="Password" class="password" placeholder="Password" required>
                    <input type="submit" name="Submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
</body>
</html>