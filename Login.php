<?php
include("Connection.php");
session_start();

if(!empty($_SESSION["username"]))
{
	if(!empty($_GET['link']))
	{
		header("Location:".$_GET['link']);
	}
	else{
		header("Location:Indexx.php");
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Log-In</title>
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
 			<form action="Login.php?link=<?php echo $_GET['link'] ?>" method="post">
 				<label>Enter Your Email</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="email" name="email">
	 			<br>
	 			<label>Enter Your Password</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="password" name="password">
	 			<br>
	 			<input style="display: block;width: 100%; padding: 5px;" type="submit" name="loginsubmit" value="Log-In">
 			</form>
 			<br><br>
 			<hr>
 			<br>
 			<p style="text-align: center;">New Here?</p>
 			<br>
 			<a style="text-decoration: none;background-color:  whitesmoke; border: 1px solid gray;padding: 5px 80px 5px 80px;" href="Signup.php">Create New Account</a>
 		</div>	
   </body>
</html>

<?php
	if(isset($_POST['loginsubmit']))
	{
		$pass=md5($_POST['password']);
		$email=$_POST['email'];
		$sql="select * from user where pass='$pass' and email='$email'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		if($row)
		{
			$_SESSION["username"]=$row['username'];
			if(!empty($_GET['link']))
			{
				header("Location:".$_GET['link']);
			}
			else{
				header("Location:Indexx.php");
			}
			
		}
		else
		{
			echo"<script>alert('Email or Password is not Correct')</script>";
		}
	}
    ?>	