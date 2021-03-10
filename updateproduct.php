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
 			<form method="post" action="" enctype="multipart/form-data">
 				<?php
 					$p_id=$_GET['p_id'];
 					$sql="SELECT * FROM product WHERE P_id='$p_id'";
 					$reslut=mysqli_query($conn,$sql);
 					$row=mysqli_fetch_assoc($reslut);
 					$img=$row['img'];
 				?>
 				<label>Product Name</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="product_name" value="<?php echo $row['product_name'] ?>">
	 			<br>
	 			<label>Brand</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="brand" value="<?php echo $row['brand_name'] ?>">
	 			<br>
	 			<label>Category</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="category" value="<?php echo $row['catagory'] ?>">
	 			<br>
	 			<label>Price</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="price" value="<?php echo $row['price'] ?>">
	 			<br>
	 			<label>Type</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="type"	required="required" value="<?php echo $row['Type'] ?>">
	 			<br>
	 			<label>Quantity</label>
	 			<input style="display: block;width: 100%;padding: 5px;" type="text" name="qunty" value="<?php echo $row['quantity'] ?>">
	 			<br>
	 			<label>Choose Image</label>
	 			<br>
	 			<img height="60" width="50" src="File/<?php echo $row['img']?>">
	 			<input style="display: block;width: 100%;padding: 5px;" type="file" name="image" value="<?php echo $row['img'] ?>">
	 			<br>
	 			<input style="display: block;width: 100%; padding: 5px;" type="submit" name="update_btn" value="Update">
 			</form>
 		</div>	
   </body>
</html>

<?php
	if(isset($_POST['update_btn']))
	  {
		$name=$_POST['product_name'];
		$b_name=$_POST['brand'];
		$c_name=$_POST['category'];
		$qty=$_POST['qunty'];
		$price=$_POST['price'];
		$type=$_POST['type'];
		
		$image=$_FILES['image']['name'];
		$temp=$_FILES['image']['tmp_name'];
		if(empty($image))
		{
			$image=$img;
		}
		else
		{
			unlink("File/$img");
			move_uploaded_file($temp,"File/$image");
		}
		$sql="UPDATE `product` SET `P_id`='$p_id',`product_name`='$name',`brand_name`='$b_name',`catagory`='$c_name',`price`='$price',`quantity`='$qty',`img`='$image',Type='$type' WHERE P_id='$p_id'";
        if(mysqli_query($conn,$sql))
		{
			header("location:AlProShow.php");
			echo"<script>alert('Update Successfully')</script>";
		}
        		
	  }
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>