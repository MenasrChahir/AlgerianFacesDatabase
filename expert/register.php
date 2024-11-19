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
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
   <!-- #############################################################" -->
		<link rel="stylesheet" type="text/css" href="../css/register.css">
	

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
                       <li> <a href="login.php">Expert</a>      </li>
            </ul> 
            </li>
        </ul>
    </nav>
    <section >
    
        <?php include('server.php') ?>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  <div class="header_2">
  	<h1> Register-Now </h1>
<!-- username -->
  	<div class="textbox">
  	   <i class="fa fa-user" aria-hidden="true"></i>
  	  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
  	</div>
<!-- email -->
  	<div class="textbox">
  	   <i class="fa fa-envelope" aria-hidden="true"></i>
  	  <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
  	</div>
<!-- profession -->
    <div class="textbox">
  	   <i class="fa fa-briefcase " aria-hidden="true"></i>
  	  <input type="text" placeholder="Profession" name="job" >
  	</div>
<!-- CV -->

    <!-- <div class="textbox">
     <i class="fa fa-drivers-license"  aria-hidden="true"></i>
      <input type="file"  name="file_pdf">
    </div> -->

<!-- Password -->
  	<div class="textbox">
  	   <i class="fa fa-lock" aria-hidden="true"></i>
  	  <input type="password" placeholder="Enter Password" name="password_1">
  	</div>

  	<div class="textbox">
		 <i class="fa fa-lock"  aria-hidden="true"></i>
  	  <input type="password"  placeholder="Confirm Password" name="password_2">
  	</div>
    
    

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<h5 class="heading">
  		Already a member? <a href="login.php">Sign in</a>
  	</h5>

	  </div>

  </form>
  
  <div class="rgstr_1">
  <img src="../css/logo/Forms.svg" alt="login"  width="800" height="540" >
  </div>
  
</section>
</body>

</html>