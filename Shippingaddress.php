<?php
include("Connection.php");
session_start();
if(!isset($_SESSION['username']))
{
	$link="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header("Location:Login.php?link=".$link);
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Shipping Adderss</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>       
   <body>
	   	<div style="width: 100%;margin-top: 50px;">
	   		<div style="margin-left: 500px;">
	   			<a style="padding: 10px;background-color: #555555;text-decoration: none;color: white; border-radius: 3px;" href="Cart.php">
	  				<i class="fas fa-long-arrow-alt-left"></i>
	      			Back</a>
	   		</div>
	   	</div>
	   	<form method="post" action="">
	   		<div style="display: flex;justify-content: center;padding: 0px 20px 0px 20px;margin-top:50px;">
		   		<div class="login-cont" style="left: 5%; position: static;">
	 			<h3>Shipping Address</h3>
	 			<br>
	 			<label>Full Name</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="fullname" required="required">
	 			<br>
	 			<label>Phone</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="phone" required="required">
	 			<br>
	 			<label>Address</label>
	 			<textarea name="textarea" style="width: 100%;height: 100px;" required="required"></textarea>
	 			<br><br>
	 			<label>Payment Method</label>
	 			<div class="payment-style">
					<input type="radio" name="payment_type" value="bkash" required="required">
					<span > Bkash</span>
					<input style="margin-left: 10px;" type="radio" name="payment_type" value="Cash On Delivery" required="required">
					<span> Cash On Delivery</span>
	 			</div>
	 			<br>
	 			<input style="display: block;width: 100%; padding: 5px;" type="submit" name="place_order" value="Place Order">
	 			</div>
		 		<div>
		 			<img src="Image/shopping.jpg" width="100%" height="100%">
		 		</div>	
		   	</div>
	   	</form>
   </body>
</html>


<?php
	if(isset($_POST['place_order']))
	{
		if(isset($_SESSION['cart']))
		{
			$username=$_SESSION['username'];
			$fullname=$_POST['fullname'];
			$phone=$_POST['phone'];
			$address=$_POST['textarea'];
			$payment_type=$_POST['payment_type'];

			$sql="SELECT count(*) as count FROM shippingaddress";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			$shipping_id=$row['count']+1;
			
			$sql="INSERT INTO `shippingaddress`(`shipping_id`, `fullname`, `phone`, `address`,`username`,`payment_method`) VALUES ('$shipping_id','$fullname','$phone','$address','$username','$payment_type')";
			$result=mysqli_query($conn,$sql);
			

			foreach ($_SESSION['cart'] as $key => $value) {
				$p_id=$value['p_id'];
				$quantity=$value['quantity'];
				$price=$value['price'];
				$sql="INSERT INTO `corder`(`order_id`, `username`, `p_id`, `quantity`, `price`,`shipping_id`) VALUES (null,'$username','$p_id','$quantity','$price','$shipping_id')";
				$result=mysqli_query($conn,$sql);
				unset($_SESSION['cart']);
				}
			if($payment_type=="bkash")
			{
				header("Location:Checkout.php");
			}
			else
			{
				header("Location:Indexx.php");
				echo "<script>
						alert('Your Order Placed Successfully');
					</script>";
			}
		}
	}
?>