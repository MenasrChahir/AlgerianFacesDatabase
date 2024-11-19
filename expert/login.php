<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

	<head>
    <title>Expert</title>
		<meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style02.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style03.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
   <!-- #############################################################" -->
		<link rel="stylesheet" type="text/css" href="../css/style01.css">
		
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#"> <label class="logo">Data-set</label> </a>
        <ul>
            <li><a class="active" href="../index.php">Home</a></li>
            <li><a href="../admin/Admin.php">Admin</a></li>
            <li class="menu">   <a href="#">Login</a>
            <ul class="submenu">
                       <li> <a href="../signing_up/login.php">User</a>    </li>
                       <li> <a href="login.php">Expert</a> </li>
            </ul> 
            </li>
        </ul>
    </nav>
    <section >

	<form method="post" action="login.php">
         <?php include('server.php') ?>
		<?php include('errors.php'); ?>

	  <div class="header_1">
		  <h1> Expert-Login </h1>
            <div class="textbox">
                
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Usernname"
                                name="username" value="">
            </div>

            <div class="textbox">
                
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                                name="password" value="">
            </div>

            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            
            <h5>
                Not yet a member? <a href="register.php">Sign up</a>
            </h5>

	</div>
  </form>

  <div class="Log">
  <img src="../css/logo/Signin.svg" alt="login"  width="780" height="590">
  </div>
  

    </section>
</body>

</html>
