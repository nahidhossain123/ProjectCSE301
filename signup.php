<?php
session_start();
include("Connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Sign-Up</title>
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
 			<h3>Sign-Up</h3>
 			<br>
         <form method="post" action="">
            <label>User Name</label>
            <input style="display: block;width: 100%;padding: 5px;" type="text" name="user">
            <br>
            <label>Email</label>
            <input style="display: block;width: 100%;padding: 5px;" type="email" name="email">
            <br>
            <label>Password</label>
            <input style="display: block;width: 100%;padding: 5px;" type="password" name="password">
            <br>
            <input style="display: block;width: 100%; padding: 5px;" type="submit" name="signup_btn" value="Sign-Up">
         </form>
 			<br><br>
 			<hr>
 			<br>
 			<p>By clicking Sing-up you are agree to our terms and privacy conditions</p>
 		</div>	
   </body>
</html>

<?php
   if(isset($_POST['signup_btn']))
   {
      $user=$_POST['user'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
       
      
         $sql="SELECT c_id FROM `user` WHERE  email='$email' ";
         $Cresult=mysqli_query($conn,$sql);
         $C_row=mysqli_num_rows($Cresult);
         if($C_row>0)
         {
            echo"<script>alert('This Email Already use!!')</script>";
         }
         else
         {
           $pass=md5($pass);
           $sql="INSERT INTO `user`(`c_id`, `username`,`email`,`pass`) VALUES ('NULL','$user','$email','$pass')";
           if(mysqli_query($conn,$sql))
           {
               echo"<script>alert('Sign Up Successfully')</script>"; 
               header("Location:Login.php"); 
           }              
         }       
   }
?>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>