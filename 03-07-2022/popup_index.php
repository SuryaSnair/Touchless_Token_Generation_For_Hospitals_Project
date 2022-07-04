<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="popup.css"> 
    <style>
body{
    margin: 0;
    padding: 0;
    background: url(bgd.png);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
 .login-box{
    width: 320px;
    height: 320px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: white;
}
input[type=button]:hover
{
  background-color: #39ac39;
}
input[type=button] {
  background-color: #3366ff ;
  border: none;
  color: white;
  padding: 6px 2px;
  text-decoration: none;
  margin: 14px 100px;
  cursor: pointer;
  border-radius: 18px;
  width: 60px;
  height:38px;
}
</style>
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
    <h1>Your Token no is: <?php
       if($_GET){
        echo $_GET['id'];     
       }else{
        echo "Url has no user";
       }
       ?>
    </h1>
        <form>
        <h4>Hope you feel better soon...</h4>
        <input type=button onClick="location.href='index.php'" value='OK'>
         </form>
    </div>    
    </body>
</html>