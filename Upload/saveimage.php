<?php
 //set random name for the image, used time() for uniqueness

$filename =  time() . '.png';
$filepath = 'img/';
if(!is_dir($filepath))
    mkdir($filepath);
if(isset($_FILES['webcam'])){   
    move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
   
    echo $filename;
}
?>