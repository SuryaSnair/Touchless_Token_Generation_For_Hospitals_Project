<?php 
        function runApp(){
            $command = escapeshellcmd('python C:\xampp\htdocs\token\aimousevp.py');
            $output = shell_exec($command);
            // echo $output;
            //C:\xampp\htdocs\token\aimousevp.py');
        }
        
        runApp();
        
?>