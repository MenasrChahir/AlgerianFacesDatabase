<?php
include ('connect.php');

//#######################################

         if (isset($_POST['submit'])){
            $avatar=$_POST['avatar'];
            $fileDestina='img/'.$avatar;

            $age = $_POST["age"];
            $emotion = $_POST["emotion"];
            $gender = $_POST["gender"];
            $filename = $_FILES['fileToUpload']['name'];
            $allowed = array('jpg','png','jpeg');
            
            if(!empty($filename) and (empty($avatar))){

                $fileSize = $_FILES['fileToUpload']['size'];
                $fileType = $_FILES['fileToUpload']['type'];
                $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
                $fileExt = explode('.',$filename);
                $fileActualExt = strtolower(end($fileExt));
                $fileNameNew = uniqid('',true).".".'png' ;
                // $filePlace = 'C:/xampp1/htdocs/index/Upload/img/'."$fileNameNew ";
                // hna nziid detection 
                if (in_array($fileActualExt,$allowed)){
                  
                  if($fileSize < 5000000) {  // > 5 Mega Byte 
                    
                      $fileDestination = 'img/'.$fileNameNew;
                      move_uploaded_file($fileTmpName,$fileDestination);
                     
                    $sql = "INSERT INTO images (age, emotion, gender,image) VALUES ('$age', '$emotion', '$gender','$fileDestination')";
                     if (mysqli_query($conn, $sql)) {
                      header('location: Upload_sucss.php');

                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    
                    mysqli_close($conn);

                
                  
                  } else {
                     header('location: Size.php');
                   }

                  } else {
  
                    header('location: Upload_Failed.php');
                }

              
            } else if((!empty($avatar) and (empty($filename)))){

               $sql = "INSERT INTO images (age, emotion, gender,image) VALUES ('$age', '$emotion', '$gender','$fileDestina')";
                   if (mysqli_query($conn, $sql)) {

                      header('location: Upload_sucss.php'); }

                    } else if((!empty($avatar) and (!empty($filename)))){ header('location: Select_erreur.php'); }

            else {header('location: No_Image.php');}
          }
    ?>
   
  

