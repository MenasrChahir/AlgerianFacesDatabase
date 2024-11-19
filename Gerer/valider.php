<?php
include ('../Upload/connect.php');

#################################"
         if (isset($_POST['but-2'])){        
        $id=$_POST['id'] ;
        $req="UPDATE images SET valider='1' ,status='validate' WHERE id='$id'";
                 if (mysqli_query($conn, $req)) {
            
                    header('location: image_not_validate.php');

         }

         }
        ?>