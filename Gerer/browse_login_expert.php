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
    <!-- <link rel="stylesheet" href="../css/style02.css"> -->
    <link rel="stylesheet" href="../css/style03.css">
     <link rel="stylesheet" href="../css/style02.css">
    <link rel="stylesheet" href="browse.css">
    <link rel="stylesheet" href="browse_01.css">
    <!-- <link rel="stylesheet" href="drop_down.css"> -->
    
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
            <li><a class="active" href="../expert/expert_after_login.php">Home</a></li>

            <li><a href="../expert/logout.php">Logout</a></li>

            
        </ul>
    </nav>

   
    
  <div class="sidebar">
<b><a class="active" href="#">Categories</a>
  <a href="#Happy">Happy</a>
  <a href="#Sad">Sad</a>
  <a href="#Angry">Angry</a>
  <a href="#Surprised">Surprised</a>
  <a href="#Neutral">Neutral</a>

</div>

 <div class="content">
    <h1><< GALLERY >></h1>

             <div id="Happy">
                    <h3>Happy</h3>
                    <div class="image-flex">
                    <?php

                    $req="SELECT * from  images where emotion='happy' AND valider='1'";
                    $res=mysqli_query($conn,$req);
                    while($line=mysqli_fetch_assoc($res)){
                        
                        echo'<div>   

                                <div class="image-area">
                                        <div class="single-img">
                                            <img src=../Upload/'.$line['image'].' alt="" height="200px" width="200px" />
                                        </div>
                                </div>
                        </div>';
                    }
                    ?>
                    </div>
            </div>
</div> 

<div class="content">
    <div id="Sad">
         <h3>Sad</h3>
         <div class="image-flex">
        <?php

             $req="SELECT * from  images where emotion='sad' AND valider='1'";
             $res=mysqli_query($conn,$req);
              while($line=mysqli_fetch_assoc($res)){
                    
                   echo'<div>   
                   <div class="image-area"> 
                         <div class="single-img">
                            <img src=../Upload/'.$line['image'].' alt="" height="200px" width="200px" />
                         </div>
                   </div>
                   </div>';
                }
        ?>
        </div>
    </div>
    </div> 
        

<div class="content">
    <div id="Angry">
         <h3>Angry</h3>
         <div class="image-flex">
        <?php

             $req="SELECT * from  images where emotion='angry' AND valider='1'";
             $res=mysqli_query($conn,$req);
              while($line=mysqli_fetch_assoc($res)){
                    
                   echo'<div>   
                   <div class="image-area"> 
                        <div class="single-img">
                             <img src=../Upload/'.$line['image'].' alt="" height="200px" width="200px" />
                        </div>
                   </div>
                   </div>';
                }
        ?>
        </div>
    </div>
    </div> 
    
<div class="content">
    <div id="Surprised">
         <h3>Surprised</h3>
         <div class="image-flex">
        <?php

             $req="SELECT * from  images where emotion='surprised' AND valider='1'";
             $res=mysqli_query($conn,$req);
              while($line=mysqli_fetch_assoc($res)){
                   echo'<div>   
                   <div class="image-area">
                        <div class="single-img">
                            <img src=../Upload/'.$line['image'].' alt="" height="200px" width="200px" />
                        </div>
                   </div>
                   </div>';
                }
        ?>
        </div>
    </div>
    </div> 

<div class="content">
    <div id="Neutral">
         <h3>Neutral</h3>
         <div class="image-flex">
        <?php

             $req="SELECT * from  images where emotion='neutral' AND valider='1'";
             $res=mysqli_query($conn,$req);
              while($line=mysqli_fetch_assoc($res)){
                    
                   echo'<div> 
                   <div class="image-area"> 
                        <div class="single-img">
                             <img src=../Upload/'.$line['image'].' alt="" height="200px" width="200px" />
                        </div>
                    </div>
                   </div>';
                }
        ?>
        </div>
    </div>
    </div>   

           
    

</body>
</html>



  <?php

} else {
    echo '<script type="text/javascript"> alert("Error.");location.href= "./index.php"; </script>';
    session_destroy();
}

?>