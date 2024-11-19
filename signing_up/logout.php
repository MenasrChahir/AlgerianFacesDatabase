<?php 
require_once("./connect.php");
session_start();  
session_destroy();
echo '<script type="text/javascript"> alert(" deconexion !! ");  
                 location.href= "./login.php"; 
                        </script>';   
?> 