<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
  
// connect to the database
$db = mysqli_connect('localhost', 'root','', 'pfe');

// REGISTER USER

if (isset($_POST['reg_user'])) {
  
  
  // for CV file

//   $filename = $_FILES['file_pdf']['name'];
//   $allowed = array('pdf');
  

//   if(!empty($filename)){

//     // $fileType = $_FILES['file']['type'];
//                 $fileTmpName = $_FILES['file_pdf']['tmp_name'];
//                 $fileExt = explode('.',$filename);
//                 $fileActualExt = strtolower(end($fileExt));
//                 $fileNameNew = uniqid('',true).".".'pdf' ;
// //  TEST TYPE
//           if (in_array($fileActualExt,$allowed)){
//                   $fileDestination = 'cv/'.$fileNameNew;
//                   move_uploaded_file($fileTmpName,$fileDestination);
//                 }
//                   else{array_push($errors,"Select pdf or docx type");}
//           }else{array_push($errors,"Select your 'CV' file");}
                  
            

  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $job = mysqli_real_escape_string($db, $_POST['job']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($job)) { array_push($errors, "Profession is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	    array_push($errors, "The two passwords do not match");
  }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM expert WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO expert (username, email, profession, password) 
  			  VALUES('$username', '$email','$job' , '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now regestred";
  	header('location: login.php');
  }
}
  

// LOGIN EXPERT
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM expert WHERE username='$username' AND password='$password' AND valider='1'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $data = mysqli_fetch_assoc($results);

      $_SESSION['username'] = $username;

      $_SESSION['id']=$data['id'];
      
      $_SESSION['password']=$password;
  	  $_SESSION['success'] = "You are registred ";
  	  header('location: expert_after_login.php');
  	}else {
  		array_push($errors, "Wrong informations/You're not validate yet<b>!</b>");
  	}
  }
}

?>
