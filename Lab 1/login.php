<?php 
  session_start();
  //connecting to database
  include ("connection.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $username_email = $_POST['username'];
    $password = $_POST['password'];


    //read from database
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username_email' or email = '$username_email'");

    if(mysqli_num_rows($query) > 0){
      $userdata = mysqli_fetch_array($query);
      if($userdata['password'] === $password){
        //set session variables
        $_SESSION['username'] = $userdata['username'];
        $_SESSION['password'] = $userdata['password'];
      }else{
        echo '<script>alert("Invalid password.")</script>';
      }
    }else{
      echo '<script>alert("No existing user.")</script>';
    }

    if(isset($_SESSION['username'])){   //check is session variable username has some variable
      //direct to homepage
      $_SESSION['last_login_timestamp'] = time();
      header("Location: home.php");
    }
  }
 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<title>login | ARMY 방</title>
<link rel="stylesheet" href="loginstyles.css" type="text/css"/>

</head>

<body>

  <div class="header">
    <a href="https://fontmeme.com/korean/"><img src="https://fontmeme.com/permalink/210506/5a16e3e952d7c036cc37e54615712bdf.png" alt="ARMY 방" border="0"></a>
  </div>
  <div class="login">
  <form method="post">
    
    <a href="https://fontmeme.com/korean/"><img src="https://fontmeme.com/permalink/210509/0c14d9013005695f03f4ba67ed51386e.png" alt="Welcome to ARMY 방" border="0"></a>

    <input type="text" id = "username" name="username" placeholder="Email or Username" required>

    <input type="password" id = "password" name="password" placeholder="Password" required>
    <br>

    <div class="pass-container">
      <label><input type="checkbox" onclick="change()">Show password</label>
    </div>

    <br>
    <br>
    <div id="container">
      <a href=""><input type="submit" name = "login_button" value="Log In"></a><br>
      <a href="signup.php"><input type="button" value="Sign up"></a><br>
    </div><br><br><br><br><br><br>

    <script>
      function change(){
        var pass  = document.getElementById('password');
        if (pass.type == "password") {
          pass.type= 'text';
        }else{
          pass.type= 'password';
        }
      }
     </script>
  </form>

  </div>

</body>

</html>
