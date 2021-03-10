<?php
include("Connection.php");
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>       
   <body>
	   	<table style="margin-top: 30px;">
	   		<tr>
	   			<td style="border: none;"><a href="javascript:history.back()">
	  				<i class="fas fa-long-arrow-alt-left"></i>
	      			Back</a>
	      		</td>
	   		</tr>
	   	</table>
 		<div class="login-cont">
 			<h3>Log-In</h3>
 			<br>
 			<label>Enter Your Email</label>
 			<input style="display: block;width: 100%;padding: 5px;" type="email" name="email">
 			<br>
 			<label>Enter Your Password</label>
 			<input style="display: block;width: 100%;padding: 5px;" type="password" name="password">
 			<br>
 			<input style="display: block;width: 100%; padding: 5px;" type="submit" name="loginsubmit" value="Log-In">
 			
 		</div>	
   </body>
</html>