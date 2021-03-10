<?php
include('Connection.php');
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
				<h2>All Users</h2>
				
			</div>
			<table style="width:100%;">
				<tr>
					<th width="8%">NO.</th>
					<th>User Name</th>
					<th>Email</th>
                    <th>Action</th>
				</tr>
				<?php
					$sql="SELECT * FROM user";
					$result=mysqli_query($conn,$sql);
					$count=1;
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td><?php echo $count++;?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['email']?></td>
					<form action="adminUser.php" method="post">
						<input type="hidden" name="user_id" value="<?php echo $row['c_id'] ?>">
						<td width="12%"><input style="padding: 5px 10px;background-color: red;color: white;border-radius: 3px;border:none;" type="submit" name="delete" value="Delete"></td>
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
	if(isset($_POST['delete']))
	{
		$user_id=$_POST["user_id"];
		$sql="DELETE FROM user WHERE c_id='$user_id'";
		mysqli_query($conn,$sql);
		header("Location:adminUser.php");
	}
?>