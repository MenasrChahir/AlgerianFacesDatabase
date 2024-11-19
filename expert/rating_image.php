<?php

session_start();

include ('../Upload/connect.php');

#################################"


        if (isset($_POST['but-4'])){   
        
                $rating = $_POST['rate'];    
                $id=$_POST['id'] ;
                $id_user=$_SESSION["id"];
                $req="INSERT INTO note (expert,image,notes) VALUES ('$id_user','$id','$rating')";
             if (mysqli_query($conn, $req)) {
                    header('location: expert_rating.php');

         } else{header ('location: expert_rating_error.php');}
        }
         
        ?>


<!-- SELECT image,avg(notes) as moyenne FROM `note` WHERE image=98  -->