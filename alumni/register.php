<?php include "header.php" ?>
<?php include "bottombar.php" ?>
<link rel="stylesheet" href="css/register.css">
</br>
<?php
	if(isset($_POST["submit"]))
	{
			
		$name = $_POST["name"];
		$username = $_POST["username"]; // name field in the form
		$email=$_POST["email"];
		$password = $_POST["password"];
		$dup_password = $_POST["repassword"];
		$month=$_POST["BirthMonth"];
		$day=$_POST["BirthDay"];
		$year=$_POST["BirthYear"];
		$numb = $_POST["phone"];
		$gend=$_POST["gender"];
		echo $gend;
		
				//message object.
/*$subject = "New user registration.";
$message = "<h2>New user registration.</h2>";
$message .= "<p><strong>Name: </strong>".$name."</p>";
$message .= "<p><strong>Email: </strong>".$email."</p>";
$message .= "<p><strong>Username: </strong>".$username."</p>";

$message_obj = new Messages;
$message_obj->new_message('karpagam812@gmail.com', $subject, $message);
	*/	
		
		if($password != $dup_password)
		{
			echo "Registration unsuccesfull due to password mismatch!!! Try again!!!";
		}
		else
		{
			$query = "INSERT INTO register(name,username, password,email_id,ph_no,birthday,birthmonth,birthyear) VALUES ( '$name','$username', '$password','$email','$numb','$day','$month','$year');";
			mysql_query($query);
			if(mysql_affected_rows()==1)
			{
				//header("Location: home.php");
				echo "<br>Registration success";
				header("Location: login.php?msg=registration success. you can login now.");
			}
		}
	}
?>


<script type="text/javascript">
	function validate_registration()
	{
		name = $("#id_name").val();
		username = $("#id_username").val();
		phone = $("#id_phone").val();
		pass = $("#id_password").val();
		repass = $("#id_repassword").val();
		//alert(pass);
		email = $("#id_email").val();
		if(name.length > 2 && name.match(/^[A-Za-z ]+$/))  
		{
			$("#id_name_msg").html("ok");
		}
		else
		{
			$("#id_name_msg").html("Enter valid name");
			return false;
		}
		if(email.length>=0 && email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/))		
		{
			$("#id_email_msg").html("ok");
		}
		else
		{
			$("#id_email_msg").html("Enter Valid email id");
			return false;
		}
		if(username.length>2 && username.match(/^[A-Za-z0-9 ]+$/))
		{
			//$("#id_username_msg").html("ok");
			if (username == '') {
				$("#id_username_msg").html("");
			}
			else{
				$.ajax({
				url: "validation.php?uname="+username
				}).done(function( data ) {
				$("#id_username_msg").html(data);
				});   
			} 
		}
		else
		{
			$("#id_username_msg").html("Enter valid username");
			return false;
			
		}
		if(phone.length>6 && phone.match(/^[0-9]+$/))		
		{
			$("#id_phone_msg").html("ok");
		}
		else
		{
			$("#id_phone_msg").html("Enter valid phone number");
			return false;
		}
		if(pass.length>3 && pass.match(/[A-Za-z0-9]+/))
		{
			$("#id_pass_msg").html("ok");
		}
		else
		{
			$("#id_pass_msg").html("Password must be atleast 6 chars");
			return false;
		}
		if(pass!=repass)
		{
			$("#id_repass_msg").html("Password mismatch");
			return false;
		}
		else
		{
			$("#id_repass_msg").html("ok");
		}
		alert("true");
		return true;
	}
	$(document).ready(function(){
	  $(".register").blur(function(){
		validate_registration();
	  });
	});
</script>
<h2 style="text-align:left;margin-left:400px;position:relative;">REGISTRATION FORM</h2>
</br>
<div class="container">
	
	<div  class="form">
		<form  action="register.php" method="post" id="register_login" onsubmit="return validate_registration()" >
			<div class='row'>
				<p class="contact"><label for="name">Name</label></p> 
				<div class='cell'>
					<input type="text" name="name" id="id_name" class="register"placeholder="First and last name" required="" tabindex="1" /><br>
				</div>
				<div class='cell' id='id_name_msg'></div>
			</div>
			<div class='row'>
				<p class="contact"><label for="email">Email</label></p> 
				<div class='cell'>
					<input type="text" name="email" id="id_email" class="register" placeholder="example@domain.com" required="" /><br>
				</div>
				<div class='cells' id='id_email_msg'></div>
			</div>
			
			<div class='row'>
				<p class="contact"><label for="username">Create a username</label></p> 
				<div class='cell'>
					<input type="text" name="username" id="id_username" class="register" placeholder="username" required="" tabindex="2"/><br>
				</div>
				<div class='cell' id='id_username_msg'></div>
					</div>
			
			<div class='row'>
				<p class="contact"><label for="password">Create a password</label></p> 
				<div class='cell'>
					<input type="password" name="password" id="id_password" class="register" required=""/><br>
				</div>
				<div class='cell' id='id_pass_msg'></div>
			</div>
			<div class='row'>
				<p class="contact"><label for="password">Re-enter password</label></p> 
				<div class='cell'>
					<input type="password" name="verifypass" id="id_repassword" class="register" /><br>
				</div>
				<div class='cell' id='id_repass_msg'></div>
			</div>
			
			<fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day</label><input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required="">
                <label>Year</label> <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required="">
              </fieldset>
			
			<label>Gender</label><p> <!--<input type='radio' name='gender' value="male"/><label>male</label>
				<input type='radio' name='gender' value="female"/><label>female</label>-->
				<select id="gender" name="gender" style='width:135px;' >
				<option>Please Choose</option>
				<option value="female">female</option>
				<option value="male">male</option>
			</select></br></br>
			
			<div class='row'>
				<p class="contact"><label for="phone">Mobile phone</label></p> 
				<div class='cell'>
					<input type="text" name="phone" id="id_phone"  class="register" placeholder="phone number" /><br>
				</div>
				<div class='cell' id='id_phone_msg'></div>
			</div></br>
			
			<div class='row'>
				<div class='cell'></div>
				<div class='cell'>
					<input type="submit" name="submit_login" value="Sign me up!" class="buttom"/>
				</div>
			</div>
					<!--Email-Id: <input type="text" name="email" /> <br> -->
		</form>
	</div>

</div>
