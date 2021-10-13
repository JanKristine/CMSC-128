<?php 
  session_start();
  include ("connection.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' or email = '$email'");

    if(mysqli_num_rows($query)>0){
      echo '<script>alert("Email or username is already used")</script>';
    }
    else{
      //save to database
      
      $sql = "INSERT INTO user (name, username, email, password, birthdate) VALUES ('$name', '$username', '$email', '$password', '$birthdate');";

      mysqli_query($conn, $sql);
      header("Location: login.php");
      die;
    }

    
  }



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="content-type"  content="text/html;charset=utf-8">
    <title>sign up | ARMY 방</title>
    <link href="signupstyles.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="header">
      <a href="https://fontmeme.com/korean/"><img src="https://fontmeme.com/permalink/210506/5a16e3e952d7c036cc37e54615712bdf.png" alt="ARMY 방" border="0"></a>
    </div>

    <div class="signup">
      <form method= "post" name="signupform" action="#" onsubmit="return required()">
        <a href="https://fontmeme.com/korean/"><img src="https://fontmeme.com/permalink/210510/7d276f10da8427243136bbd63028b7f5.png" alt="korean" border="0"></a>

        <input type="text" id="name" name="name" placeholder="Full name"><br><span id="vname"></span><br>
        <input type="text" id="username" name="username" placeholder="Username"><br><span id="vusername"></span><br>
        <input type="text" id="email" name="email" placeholder="Email address"><br><span id="vemail"></span><br>
        <input type="password" id="password" name="password" placeholder="Password"><br><span id="vpass"></span><br>
        <input type="date" id="birthdate" name="birthdate" placeholder="Birthdate (DD-MM-YYYY)"><br><span id="vdate"></span><br>
        <input type="submit" name="signup_button" value="Register"><br><br>

        
      </form>
      <script src="validation.js"></script>

    </div>

  </body>
</html>
