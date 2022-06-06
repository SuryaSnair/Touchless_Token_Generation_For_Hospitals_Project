<?php
session_start();
$conn=mysqli_connect("localhost","root","","fruits");
?>
<?php
if(isset($_POST["submit"]))
{
$age=$_POST["age"];
$name=$_POST["name"];
if($name=="orange"){
$sql="INSERT INTO orange VALUES(NULL,'$age','$name')";
if(mysqli_query($conn,$sql))
{
  echo 'success';
  }
}

else{
    $sql="INSERT INTO apple VALUES(NULL,'$age','$name')";
if(mysqli_query($conn,$sql))
{
  echo 'success';
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a{
    text-decoration:none;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #e6eaf0;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.custom-select {
  position: relative;
  font-family: Arial;
}


/* Set a style for the submit button */
.registerbtn {
  background-color: #060533;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
form{
    height: 500px;
    border-radius: 50px;
    width: 50%;
    background-color:rgb(77, 75, 74);
    position:relative;
    top: 50px;
    left:325px;
    opacity:0.9;
    float:left;
    box-shadow: 5px 10px #888888;
}
</style>
</head>
<body>

<form method="POST" action="" >
<div class="container">
  <table  align ="center">
    <tr>
    <th colspan="2"><h1>Fruits</h1></th>
    </tr>
    <tr>
    <td id="a"></td>
    <td id="a">Age</td>
    <td><input type="text" placeholder="Age" name="age" id="age" required></td>
    </tr>
    <td><select name="name">
    <option>Select</option>
    <option>orange</option>
    <option>apple</option>
    </select></td>
    </tr>

    <div align="center">
    <input class="button" type="Reset" class="registerbtn"/>
    <button type="submit" name="submit" class="registerbtn">Submit</button>
    </div>
    </div>
    </form>


</body>
</html>





else if($Dept=="ent") {
  $sql="INSERT INTO ent VALUES(NULL,'$Name','$Age',$Dept)";
  if(mysqli_query($conn,$sql))
	{
	  echo 'success';
	  }
 }
 else if($Dept=="paediatrics") {
  $sql="INSERT INTO paediatrics VALUES(NULL,'$Name','$Age',$Dept)";
  if(mysqli_query($conn,$sql))
		{
		  echo 'success';
		  }
   }
 else if($Dept=="cardiology") {
   $sql="INSERT INTO cardiology VALUES(NULL,'$Name','$Age',$Dept)";
	if(mysqli_query($conn,$sql))
			{
			  echo 'success';
			  }
 }
 else if($Dept=="oncology") {
  $sql="INSERT INTO oncology VALUES(NULL,'$Name','$Age',$Dept)";
	if(mysqli_query($conn,$sql))
				{
				  echo 'success';
				  }
 }