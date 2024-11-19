<?php
include ('../Upload/connect.php');
?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style02.css">
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
        <label class="logo">Data-set</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>

    <section>
    <table class="content-table">
        <thead>

            <tr>
                    
                <th>Id </th>
                <th>Age </th>
                <th>Emotion</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Validate</th>
                
            </tr>
        </thead>
        <?php
$req="SELECT * from  images";
$res=mysqli_query($conn,$req);
while($line=mysqli_fetch_assoc($res)){

echo'
<tbody>
<tr>

        <td>'.$line['id'].'</td>
        <td>'.$line['age'].'</td>
        <td>'.$line['emotion'].'</td>
        <td>'.$line['gender'].'</td>
        <td>'.$line['image'].'</td>

        <td><form action="#" method="post">
            <input type="hidden" name="id" value="'.$line['id'].'" >
            <button class="butt-2" type="submit" name="butt">Delete</button> </td>
            </form>

        <td><form action="#" method="post">
        <input type="hidden" name="id" value="'.$line['id'].'" >
        <button class="butt" type="submit" name="butt">Validate</button> </td>
        </form>
    
            </tr>
            </tbody>
</div>';

  
  

  }
  ?>
    </table>
    </section>