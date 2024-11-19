<?php
include ('../Upload/connect.php');
#################################"
         if (isset($_POST['but-1'])){
        
        $id=$_POST['id'];
        $req="DELETE FROM users WHERE id='$id'";

            if (mysqli_query($conn, $req)) {
            
                header('location: users_validate.php');
            
         }
        }
        ?>