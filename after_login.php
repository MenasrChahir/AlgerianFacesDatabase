<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style02.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style03.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
   <link rel="stylesheet" type="text/css" href="css/register_inxdex.css">
      
    </head>

    <body>
        <nav>
            <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Data-set</label>
        <ul>
            <li><a class="active" href="#">Upload-picture</a></li>
            <li><a href="signing_up/login.php">Logout</a></li>
        </ul>
    </nav>

    <!-- ############## -->

    <section >
    <form action="insert.php" method="POST">
    <table>
        <tr>
            <td> Age :</td>
            <td><input type="number" name="age" placeholder="Enter Your Age" required> </td>
        </tr>

        <tr>
        <td> Gender : </td>
            <td>
                <input type="radio" name="gender" value="m" required>Male
                <input type="radio" name="gender" value="f" required>Female
            </td>
        </tr>

        <td> Emotion : </td>
        <td>
            <select name="emotion" required>
            <option value=""></option>
            <option value="">Happy</option>
            <option value="">Sad</option>
            <option value="">Angry</option>
            <option value="">surprised</option>
            <option value="">Neutral</option>
            </select>
        </td>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
    </form>
    </section>
</body>

</html>