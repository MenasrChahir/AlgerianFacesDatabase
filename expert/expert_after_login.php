<?php
include("./connect.php");

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
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style03.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
   <!-- <link rel="stylesheet" type="text/css" href="css/register_index.css"> -->
      
    </head>

    <body>
        <nav>
            <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    <a href="#"> <label class="logo">Data-set</label> </a>
        <ul>
            <li><a class="active" href="">Home</a></li>
            <li><a class="active" href="expert_rating.php">Rate</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section >
        
          
				<!-- <p><a class="btn btn-default btn-lg" href="contact.html" role="button">Browse</a> <a
						class="btn btn-default btn-lg" role="button">UPLOAD IMAGE</a></p> -->
			 
             <div class="fou">
                        <div class="row">

				<h1 class="lead"> <b>WELCOME </b></h1>
				<p class="tagline"> If You An Expert ! This is The Time For <br> Your Experience  </p>

                <a type="submit" href="../Gerer/browse_login_expert.php" class="btn5" >Browse</a>
                <a type="submit" href="expert_rating.php" class="btn6" >Rating</a>
            
					<!-- <a href="#">GetTemplate</a> -->
				</div>


        <div class="nou">
           
            <img src="../css/logo/Grades.svg" alt="home"  width="800" height="520" >
           
        </div>
    
</div>



    
    </section>
</body>

</html>



<?php

} else {
    echo '<script type="text/javascript"> alert("Error.");location.href= "./index.php"; </script>';
    session_destroy();
}

?>