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
	   			<td style="border: none;"><a href="AlProShow.php">
	  				<i class="fas fa-long-arrow-alt-left"></i>
	      			Back</a>
	      		</td>
	   		</tr>
	   	</table>
 		<div class="login-cont">
 			<h3>Add New Product To Shop</h3>
 			<br>
 			<form action="" method="POST" enctype="multipart/form-data">
 				<label>Product Name</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="product_name" required="required">
	 			<br>
	 			<label>Brand</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="brand"	required="required">
	 			<br>
	 			<label>Category</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="category"	required="required">
	 			<br>
	 			<label>Price</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="price"	required="required">
	 			<br>
	 			<label>Quantity</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="qunty"	required="required">
	 			<br>
	 			<label>Type</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="type"	required="required">
	 			<br>
	 			<label>Image</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="file" name="img"	required="required">
	 			<br>
	 			<input style="display: block;width: 100%; padding: 5px;" type="submit" name="loginsubmit" value="Store">
 			</form>
 		</div>	
   </body>
</html>
<?php 
	if(isset($_POST['loginsubmit']))
	{
		$name=$_POST['product_name'];
		$bname=$_POST['brand'];
		$catry=$_POST['category'];
		$price=$_POST['price'];
		$qty=$_POST['qunty'];
		$type=$_POST['type'];
		
		$image=$_FILES['img']['name'];
		$temp=$_FILES['img']['tmp_name'];
		move_uploaded_file($temp,"File/$image");
		
		$date=date("Y/m/d");
		
		$sqlquery="INSERT INTO `product`(`P_id`, `product_name`, `brand_name`, `catagory`, `price`, `quantity`, `img`,Date,Type) VALUES (null,'$name','$bname','$catry','$price','$qty','$image','$date','$type')";
	    
        if(mysqli_query($conn,$sqlquery))
		{
			echo"<script>alert('Data Successfully Seved')</script>";
		}
		else
		{
			echo"<script>alert('Data not Seved')</script>";
		}	
	}
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>