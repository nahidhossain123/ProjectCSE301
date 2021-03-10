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
			<a href="javascript:history.back()">
  				<i class="fas fa-long-arrow-alt-left"></i>
      			Back</a>
			</div>
			<div class="product-heading">
				<h2>All Users</h2>
				
			</div>
			<table style="width:100%;">
				<tr>
					<th width="8%">NO.</th>
					<th>User Name</th>
					<th>Product ID</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Full Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Payment Type</th>
                    <th colspan="2">Action</th>
				</tr>
				<?php
					$sql="SELECT * FROM corder";
					$result=mysqli_query($conn,$sql);
					$count=1;
					while($row=mysqli_fetch_assoc($result))
					{
						$shipping_id=$row['shipping_id'];
						$sql="SELECT * FROM shippingaddress where shipping_id='$shipping_id'";
						$result1=mysqli_query($conn,$sql);
						$shipping_row=mysqli_fetch_assoc($result1);
				?>
				<tr>
					<td><?php echo $count++;  ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['p_id']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $shipping_row['fullname']; ?></td>
					<td><?php echo $shipping_row['phone']; ?></td>
					<td><?php echo $shipping_row['address']; ?></td>
					<td><?php echo $shipping_row['payment_method']; ?></td>
					<td><a style="background-color:green; padding:5px 10px 5px 10px;" href="#">Deliver</a></td>
					<td><a style="background-color:red; padding:5px 10px 5px 10px;" href="#">Delete</a></td>
				</tr>

				<?php
			}
				?>
				
			</table>
		</div>
	</body>
</html>