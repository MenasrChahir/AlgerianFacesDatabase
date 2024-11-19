<?php
include ('../Upload/connect.php');
#################################"
         if (isset($_POST['but-1'])){
        
        $id=$_POST['id'];
        $req="DELETE FROM images WHERE id='$id'";

            if (mysqli_query($conn, $req)) {
            
                header('location: image_validate.php');
            
         }
        }
        ?>