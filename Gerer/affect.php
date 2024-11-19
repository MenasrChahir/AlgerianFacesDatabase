<?php
include ('../Upload/connect.php');

#################################"
         if (isset($_POST['but-1'])){   
        $date_affect= date("y-m-d");
        $id=$_POST['id'] ;
        $req="UPDATE images SET affect='1' ,affecter='affected',date_affect='$date_affect' WHERE id='$id'";
                 if (mysqli_query($conn, $req)) {
            
                    header('location: image_not_affect.php');

         }

         }
        ?>