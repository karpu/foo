<?php include "dbconnect.php" ?>
<?php session_start(); ?>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/basic.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Alumni</title>
</head>
<body>
	<div style="background-color: #1F1F7A;">
		<div id="bgcol">
			<div style="display:inline-block;vertical-align:top;">
				<img src="images/logo.png" style="width:70px;height:70px;margin-left:65px;align:left;margin-top:10px;" >
			</div>
		<div style="display:inline-block;vertical-align:top;line-height: 0em;margin-top: 36px;">
			<div><h3 style="color:white;font-size: 20px;">GECSKP ALUMNI</h3></div>
			<div style="color:white;margin-top: 20px;"><h6>Govt. Engg College Palakkad</h6></div>
			<!--<div class="searchside">
				<form>
					<input type="search" value="search this site">
				</form> 
			</div>-->
		</div>
		<div id="header">
			<ul >
				<li style="margin-left:50px;"><a href='home.php'><span>HOME</span></a></li>
				<li><a href='about_us.php'><span>ABOUT US</span></a></li>
				<li><a href='register.php'><span>REGISTER</span></a></li>
				<li><a href='event.php'><span>UPCOMING EVENTS</span></a></li>
				<li><a href='contact_us.php'><span>CONTACT US</span></a></li>
				<?php
					if(!isset($_SESSION["id"]))
						echo "<li style='float:right'><a href='login.php'>Login</a></li>";
					else
					{
						$name = $_SESSION["name"];
						echo "<li style='float:right'><a href='logout.php'>Logged In as $name ; Logout</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
</div>

</html>
