<?php include "header.php" ?>
<?php include "bottombar.php" ?>
<link rel="stylesheet" href="css/login.css">
<?php
if(isset($_POST["submit_login"]))
	{
		$username = mysql_real_escape_string($_POST["username"]); // name field in the form
		$password = mysql_real_escape_string($_POST["password"]);

		$q = "SELECT 1 FROM register WHERE username='$username' AND password='$password'";
	
		$res = mysql_query($q);
		
		if(mysql_num_rows($res)==1)
		{
			$q= mysql_query("SELECT id FROM register WHERE username='$username'");
			$id=mysql_result($q,0,'id');
			$q= mysql_query("SELECT name FROM register WHERE username='$username'");
			$name=mysql_result($q,0,'name');
			
			
			$_SESSION["id"]=$id;
			$_SESSION["name"]=$name;
			header("Location: home.php?msg=$username");
			
		}
		else
			echo "<b class='error'>Login failed</b>";
	}

?>



<div id="login">
	<h1><strong style="font-size: 30px;color: brown"></strong> <style="font-size:20px";>Please login.</style></h1>
	<div style="margin:10px;">
	<form action="login.php" method="post">
		<fieldset>
			<p><input type="text" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p>
			<p><input type="password" name="password"  required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
			<p style="margin-left:10px;"><a href="#">Forgot Password?</a></p>
			<p><input type="submit" name="submit_login" value="Login"></p>
		</fieldset>
	</form>
	</div>
</div>
