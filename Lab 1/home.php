<?php
	session_start();
	if (isset($_SESSION['username'])) {
		if ((time() - $_SESSION['last_login_timestamp']) > 300) { 
			?>
  			<script type="text/javascript">
  			alert("You have been logged out due to inactivity.");
  			window.location = "http://localhost/bangtan/logout.php";
  			</script>
  			<?php
  
		}else{
			$_SESSION['last_login_timestamp'] = time();
		}
	}else{
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>ARMY 방</title>
<style>
body{
	background-image: url("home-bg2.png");
	background-size: cover;
}
h2{
	color: white;
}
img.rounded-corners{
	width:260px;
	height:250px;
	border-radius: 55px;
	cursor: pointer;
}
img:hover{
	opacity: 0.6;
	transition: 0.3s}

.button{
	background: transparent;
	border: none;
	color: white;
	float: right;
	font-family: "Brush Script MT", Cursive;
	font-size: 16px;
	margin-top:15px;
	margin-right: 50px;
}

.row1{
	margin-top:5px;
}
.row2{
	margin-top:15px;
}

.row2 a img{
	margin-left: 30px;
}
</style>
<script src="https://kit.fontawesome.com/1f1a33abbe.js" crossorigin="anonymous"></script>
</head>

<body>

	<div class="header">

		<a href="https://fontmeme.com/korean/"><img src="https://fontmeme.com/permalink/210506/5a16e3e952d7c036cc37e54615712bdf.png" alt="korean" border="0"></a>


		<a href="logout.php" class="button">logout</a>
		
		<i class="fas fa-video" style='font-size:20px;color:white;float:right;margin-right:50px;margin-top:15px'></i>

		<i class="fas fa-music" style='font-size:20px;color:white;float:right;margin-right:50px;margin-top:15px'></i>

		<i class="fas fa-file-alt" style='font-size:20px;color:white;float:right;margin-right:50px;margin-top:15px'></i>

		<i class='fas fa-home' style='font-size:20px;color:white;float:right;margin-right:50px;margin-top:15px'></i>

		<h2> Welcome <?php echo $_SESSION['username'];?> </h2>

	</div>

	<div class="row1">

		<img src="RM.jpg" alt="RM" class="rounded-corners row1" title="RM" hspace="30">

		<img src="JIN.jpg" alt="Jin" class="rounded-corners row1" title="Jin" hspace="30">

		<img src="SUGA.jpg" alt="Suga" class="rounded-corners row1" title="Suga" hspace="30">

		<img src="HOBI.jpg" alt="J-hope" class="rounded-corners row1" title="J-hope" hspace="30">

	</div>

	<div class="row2">

		<img src="JIMIN.jpg" alt="Jimin" class="rounded-corners row2" title="Jimin"  hspace="30">

		<img src="V.jpg" alt="V" class="rounded-corners row2" title="V" hspace="30">

		<img src="JK.jpg" alt="Jungkook" class="rounded-corners row2" title="Jungkook"  hspace="40">

		<img src="army.png" alt="ARMY logo" title="ARMY" width="260px" height="260px" hspace="20">

	</div>

</body>
</html>
