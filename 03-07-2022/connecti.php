<?php 
if(isset($_POST['update']))
{
    ob_start();
passthru('C:\Program Files\Python37\ C:\Users\Admin\PycharmProjects\Project\aimousevp.py arg1 arg2');
$output = ob_get_clean(); 
   
}
?>
<!DOCTYPE html>
<html>
    <body>
        <head>
        <form name="update" method="post" >
    <button name = "update" type="submit"> Update charts </button>
</form>
        </head>
    </body>
</html>