<?php
include ('../Upload/connect.php');
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
    <link rel="stylesheet" href="style.css">
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
            <li><a href="../admin/admin_after_login.php">Admin</a></li>
              <li class="menu">   <a href="validation_expert.php">Experts</a>
            <ul class="submenu">
                       <li> <a href="expert_validate.php">validate</a>    </li>
                       <li> <a href="expert_not_validate.php">not validate</a>    </li>
                       
            </ul> 
            </li>
             <li class="menu">   <a href="#">validate</a>
            <ul class="submenu">
                       <li> <a href="validation_user.php">User</a>    </li>
                       
            </ul> 
            </li>
            <li><a href="../admin/Admin.php">Logout</a></li>
            
        </ul>
    </nav>

    <section>
    
    <div class="space">
    <h1>ALL EXPERTS</h1>
    </div>

    <table class="content-table">
        <thead>

            <tr>
                    
                <th>Id </th>
                <th>Username </th>
                <th>Email</th>
                <th>Profession</th>
                <th>Password</th>
                <th>Status</th>
                
                
            </tr>
        </thead>
        <?php
$req="SELECT * from  expert";
$res=mysqli_query($conn,$req);
while($line=mysqli_fetch_assoc($res)){

echo'
<tbody>
<tr>

        <td>'.$line['id'].'</td>
        <td>'.$line['username'].'</td>
        <td>'.$line['email'].'</td>
        <td>'.$line['profession'].'</td>
        <td>'.$line['password'].'</td>
        <td>'.$line['status'].'</td>

        
    
            </tr>
            </tbody>
</div>';

  
  

  }
  ?>
    </table>
    </section>