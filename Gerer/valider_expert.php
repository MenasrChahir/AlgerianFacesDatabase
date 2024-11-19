<?php
include ('../Upload/connect.php');

#################################"
         if (isset($_POST['but-3'])){        
        $id=$_POST['id'] ;
        $req="UPDATE expert SET valider='1' ,status='validate' WHERE id='$id'";
                 if (mysqli_query($conn, $req)) {
            
                    header('location: expert_not_validate.php');

         }

         }
        ?>