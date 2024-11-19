<?php
include ('../Upload/connect.php');

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];


$query = "SELECT * FROM expert WHERE  (username = '$username' AND password = '$password')";
$result = mysqli_query($conn, $query);
$n = mysqli_num_rows($result);
if ($n == 1) {


?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
<title>Dataset</title>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style02.css">
    <link rel="stylesheet" href="../css/style03.css">
    <link rel="stylesheet" href="../Gerer/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style03.css"> -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
  
      
    </head>

    <body>
        <nav>
            <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#"> <label class="logo">Data-set</label> </a>
        <ul>
            
            <li><a href="expert_after_login.php">Home</a></li>
             <li><a href="expert_rating.php">Rate</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section>
    <div class="space">
        
    <h1>RATING SPACE</h1>
    </div>
    <table class="content-table">
        <thead>

            <tr>
                    
                <th>Id </th>
                <th>Age </th>
                <th>Emotion</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Rate</th>
                <th>Note</th>
                <th>Date Of Rating</th>
                <th>Rating</th>
                
            </tr>
        </thead>
        <?php
$id_user=$_SESSION["id"];

$req="SELECT * from  images where affect='1' AND valider='0'";
$res=mysqli_query($conn,$req);
while($line=mysqli_fetch_assoc($res)){
// $_SESSION['id']=$line['id'];
echo'
<tbody>
<tr>

        <td>'.$line['id'].'</td>
        <td>'.$line['age'].'</td>
        <td>'.$line['emotion'].'</td>
        <td>'.$line['gender'].'</td>
        <td> <img src=../Upload/'.$line['image'].' height="200px" width="200px"> </td>

        <form action="rating_image.php" method="post">
        <td>
        <input type="range"  name="rate" min="0" max="100" > </td>

        <td>
        ';

        $val=$line['id'];
        $req1="SELECT notes FROM note WHERE expert=$id_user  AND image=$val";
        $results = mysqli_query($conn, $req1);
        if (mysqli_num_rows($results) == 1) {
            $data = mysqli_fetch_assoc($results);
            echo $data['notes'];

        } 

        echo '
        </td>

        <td>

        ';

         $val=$line['id'];
        $req1="SELECT date FROM note WHERE expert=$id_user  AND image=$val";
        $results = mysqli_query($conn, $req1);
        if (mysqli_num_rows($results) == 1) {
            $data = mysqli_fetch_assoc($results);
            echo $data['date'];

        } 

        echo '
        </td>

        
        <td>
            <input type="hidden" name="id" value="'.$line['id'].'" >

        <button class="butt" type="submit" name="but-4" >Rate</button> 
        </td>
       
        </form>
    
            </tr>
            </tbody>
</div>';

  
  

}
  ?>
    </table>
    </section>

    <?php

} else {
    echo '<script type="text/javascript"> alert("Error.");location.href= "./index.php"; </script>';
    session_destroy();
}

?>