<?php include "header.php" ?>
<?php include "bottombar.php" ?>
<link rel="stylesheet" href="css/contact_us.css">
<style>
	 .rssbutton{
background-color: #1F1F7A;
border: 1px #ff6600 outset;
padding: 0 2px;
width:65px;
height:30px;
color: white;
text-decoration: none;
font: bold 10px Verdana;
}
</style>
<?php
	if(isset($_POST["submit_login"]))
		{
			
			$name = $_POST["name"];
			$email=$_POST["email"];
			$message=$_POST["textarea"];
			$query = "INSERT INTO contactus(name,email,message) VALUES ( '$name','$email','$message');";
			mysql_query($query);
			if(mysql_affected_rows()==1)
			{
				//header("Location: home.php");
				echo "<b style='color:red'>Message submitted successfully</b>";
				
			}
		}

?>


<div class="aboutbox1">
	</br></br></br>
	<h5>Email</h5>
	<i><p>principal@gecskp.ac.in</p></i>
	</br></br>
	<h5>Telephone</h5>
	<i><p>+91 466 2260350 </p></i>
	</br></br>
	<h5>Address</h5>
	<i><p>Govt Engineering College</p></i>
	<i><p>Mannampatta PO</p></i>
	<i><p>Palakkad, Kerala</p></i>
	<i><p>India - 678633</p></i>
		
</div>
<div class="contactbox">
	<h2>CONTACT US</h2><br>
	<p>We are here to answer any question that you may have about alumni spotlight.Reach out to us and we'll respond as soon as we can.</p>
	<br>
	<p>Even if there is something you have always wanted to experience and cant find it GECSKP ALUMNI,let us know and we promise we'll do our best.</p>
	</br></br>
	<form  action="contact_us.php" method="post" id="reg_login" >
		<div class='row'>
			<div class='cell'>Name *</div>
			<div class='cell'>
				<input type="text" name="name" id="id_name" class="reg" /><br>
			</div>
		</div></br>
		
		<div class='row'>
			<div class='cell'>Email * </div>
			<div class='cell'>
				<input type="text" name="email" id="id_email" class="reg" /><br>
			</div>
		</div></br>
	
		
		<div class='row'>	
			<div class='cell'>Message *</div>
			<div class='cell'>
				<textarea name="textarea" style="width:550px;height:150px;"></textarea>
			</div>
		</div></br>
		
		<div class='row'>
			<div class='cell'></div>
			<div class='cell'>
				<input type="submit" name="submit_login" value="Send" class="rssbutton" />
			</div>
		</div>
	</form>
</div>
