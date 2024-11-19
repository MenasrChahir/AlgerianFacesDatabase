<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['age']) && isset($_POST['gender']) &&
        isset($_POST['emotion'])) {

$age = $_POST['age'];
$gender = $_POST['gender'];
$emotion = $_POST['emotion'];

if (!empty($age) ||(!gender) ||(!emotion)){

$host ="localhost";
$dbUsername ="root";
$dbPassword="";
$dbname ="pfe";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if (mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
}


    else{
        $SELECT = "SELECT age From images Where age =? Limit 1 ";
        $INSERT = "INSERT Into images (age,emotion,gender) values ($age,$emotion,$gender) ";

//prepare statement
        $stmt = $conn -> prepare($SELECT);
        $stmt -> bind_param("i" ,$age);
        $stmt -> execute ();
        $stmt -> bind_result($age);
        $stmt -> store_result();
        $rnum = $stmt ->num_rows ;

        if($rnum ==0){
            $stmt -> close();

            $stmt = $conn ->prepare($INSERT);
            $stmt->bind_param("i",$age,$gender,$emotion,"");
            $stmt->execute();
            echo "New record inserted sucessfully";
        } 
    }
        else{
            echo $stmt->error ;
        }  
    }
            else{
            echo "Someone already register using ";
        }
        $stmt->close();
        $conn->close();
    }

      }

else{

    echo "Field Is Required" ;
    
    die();
}



?>