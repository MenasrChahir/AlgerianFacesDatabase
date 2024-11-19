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
    <link rel="stylesheet" href="../css/upload.css">
    <title>Dataset</title>
<!--  -->
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!-- <label class="logo">Data-set</label> -->
            <a href="#"> <label class="logo">Data-set</label> </a>

        <ul>
            <li><a class="active" href="../home_log.php">Home</a></li>
            <li><a class="active" href="../Gerer/browse_login_user.php">Browse</a></li>
            
             <li><a href="../signing_up/login.php">Logout</a></li>
        </ul>
    </nav>
    <section>
  
            <!-- <h2>Invalid username or password !</h2>  -->
            
        <!-- sans alert -->


            <form method="POST" action="action.php" enctype="multipart/form-data">
            <div class="login-box">
             <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                      <b>Select One Image !</b> 
             </div>
                <h1>Upload-Image</h1>
              
<table>
            <tr>
        <td> Age :</td>
            <td><input type="number" min="0" name="age" placeholder="Enter Your Age" required> </td>
            </tr>

        <tr>
            <td> Gender : </td>
            <td>
                 <input type="radio" name="gender" value="man" required>Man
                <input type="radio" name="gender" value="Women" required>Woman
            </td>
        </tr>
       
        
               <input type="hidden"  name="avatar" id="boxxx"  size="30" >
        <tr>
        <td> Emotion : </td>
        <td>
            <select name="emotion" required>
            <option value=""></option>
            <option value="happy">Happy</option>
            <option value="sad">Sad</option>
            <option value="angry">Angry</option>
            <option value="surprised">surprised</option>
            <option value="neutral">Neutral</option>
            </select>
        </td>  
        </tr> 
        
<!-- Upload-Image -->
        <td>  Select image : </td>
            
            <td>
                <input type="file" name="fileToUpload" id="fileToUpload">
               
            </td>
         
         

</table>
     <div id="webcam"></div>
    <div id="results"></div>
      
    <!-- First, include the Webcam.js JavaScript Library -->
    <script type="text/javascript" src="webcam.js"></script>
    <form >
        <input type=button value="CAPTURE" class="but-cap" onClick="captureimage()" style="font-size: 18px">
    </form>

    <script type="text/javascript">
      
      Webcam.set({
          width:200,
          height: 200,
                  image_format: 'png',
                  jpeg_quality: 90
                });
                Webcam.attach( '#webcam' );
              function captureimage() {
                  // take snapshot and get image data
                  Webcam.snap( function(data_uri) {
                      // display results in page
                      
                      
                      Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
                          document.getElementById('boxxx').value = text;
                          
                          document.getElementById('results').innerHTML = 
                        
                          '<img src="img/'+text+'"/>';
                        } );    
                    } );
                }
                </script>
            <!-- <td><input class="button" type="submit" value="UPLOAD"></td> -->
            <td><button class="button" type="submit" name="submit"> UPLOAD </button></td>
</div>
    </form>

     <div class="up_load">
  <img src="../css/logo/upload.svg" alt="login"  width="800" height="610">
  </div> 

    </section>
</body>

</html>

           