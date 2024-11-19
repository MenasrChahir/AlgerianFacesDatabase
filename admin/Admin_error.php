<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style02.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<!--  -->
    
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style03.css">
   <title>Administration</title>
<!--  -->
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
            <li><a href="Admin.php">Admin</a></li>
             <li class="menu">   <a href="#">Login</a>
            <ul class="submenu">
                       <li> <a href="../signing_up/login.php">User</a>    </li>
                       <li> <a href="../expert/login.php">Expert</a> </li>
            </ul> 
            </li>
        </ul>
    </nav>
    <section>
    
    <form action="validate.php" method="post">
        <div class="login-box1">
            <!-- <h2>Invalid username or password !</h2>  -->
             <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                       Invalid username or password!
             </div>
             
            <h1>Admin-Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>

    <div class="error">
  <img src="../css/logo/error.svg" alt="login" width="800" height="650" >
  </div>
    </section>
</body>

</html>