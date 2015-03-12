<?php
	
	$conn = mysql_connect("localhost", "root", "root");
	if(!$conn)
		die("<b class='error'>Not able to connect</b>");
	mysql_select_db("alumni");

?>
<!-- -->
