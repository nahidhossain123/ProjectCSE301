<?php
include('Connection.php');
$ip_add = getenv("REMOTE_ADDR");
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
	<body>
		<div class="allproduct">
			<div class="back-button">
			<a href="Dashboard.php">
  				<i class="fas fa-long-arrow-alt-left"></i>
      			Back</a>
			</div>
			<div class="product-heading">
				<h2>All Product Details</h2>
				<span>
					<a style="background-color:green; padding:10px;text-decoration:none;color:white;border-radius:5px;" href="AddProduct.php">+ ADD</a>
				</span>
			</div>
			<table style="width:100%;">
				<tr>
					<th width="8%">NO.</th>
					<th>Product Name</th>
					<th>Brand Name</th>
					<th>Category</th>
					<th>Price</th>
					<th>Image</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
					  $count=1;
					  $sql="SELECT * FROM product";
					  $reslut=mysqli_query($conn,$sql);
					  while($row=mysqli_fetch_array($reslut))
					  {
					?>
				<tr>
					<td><?php echo $count++ ?></td>
					<td><?php echo $row['product_name'] ?></td>
					<td><?php echo $row['brand_name'] ?></td>
					<td><?php echo $row['catagory'] ?></td>
					<td><?php echo $row['price'] ?></td>
					<td><img height="35" width="30" src="File/<?php echo $row['img']?>"></td>
					<td><?php echo $row['quantity'] ?></td>
					<td width="8%"><a style="background-color:green;padding:10px;border-radius: 3px;" href="updateproduct.php?&p_id=<?php echo $row['P_id'];?>">Update</a></td>
					<form method="post" action="AlProShow.php">
						<td width="8%">
							<input type="hidden" name="p_id" value="<?php echo $row['P_id']?>">
							<input class="action-btn" type="submit" name="delete_product" value="Delete">
						</td>
					</form>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>

<?php
if(isset($_POST['delete_product']))
	  {
		$del_id=$_POST['p_id'];
		$sql="DELETE FROM `product` WHERE P_id='$del_id'";
        if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Delete Successfully')</script>";
		} 		
	  }
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>