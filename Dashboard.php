<?php
include("Connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
      <header>
	<label>Ecommerce</label>
		<nav>
			<ul class="Nav-links">
				<li><a href="#">Dashboard</a></li>
				<li><a href="AlProShow.php">Products</a></li>
				<li><a href="adminUser.php">Users</a></li>
				<li><a href="orders.php">Orders</a></li>
			</ul>
		</nav>
		<div class="right-ele">
		<span style="display: inline-block;">
			<div class="dropdown">
					<a href="ALogin.php">User90<i style="margin-right: 5px;" class="fas fa-sort-up"></i></a>
					<div class="dropdown-content">
						<a href="Products.php">Settings</a>
						<a href="#">Log-Out</a>
					</div>
			</div>
		 </span>
		<span style="display: inline-block;">
			<a href="#"><i class="fas fa-bell"><sup>0</sup></i></a>
		</span>
		</div>
</header>
<div class="dashboard-container">
		<div class="today-sell">
			<h3>Today Sell</h3>
			<span>5000Tk</span>
		</div>
		<div class="total-user" >
			<h3>Total User</h3>
			<span>10,000</span>
		</div>
		<div class="total-online">
			<h3>Total Online</h3>
			<span>500</span>
		</div>
		<div class="total-product">
			<h3>Total Product</h3>
			<span>5000pcs</span>
		</div>
		<div class="sell-report">
			
		</div>
</div>
</body>
</html>