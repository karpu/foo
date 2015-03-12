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
<h2 style="text-align:left;margin-left:400px;position:relative;">REGISTRATION FORM</h2>
</br>
<div class="container">
			
      <div  class="form">
    		<form id="contactform" action="register.php" method="post" > 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
        
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
			</select>
			
         
				</br></br>
				<p class="contact"><label for="phone">Mobile phone</label></p> 
				<input id="phone" name="phone" placeholder="phone number" required="" type="text"> </br></br>
				<input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
		</form> 
	</div>      
</div>

