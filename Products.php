<?php
include('Connection.php');
session_start();
if(isset($_SESSION['cart']))
{
	$_SESSION['cart_total']=count($_SESSION['cart']);
}
else
{
	$_SESSION['cart_total']=0;
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	 <header>
		<label>Ecommerce</label>
			<nav>
				<ul class="Nav-links">
					<li><a href="Indexx.php">Home</a></li>
					<li>
						<div class="dropdown">
							<a href="#">Category</a>
							<div class="dropdown-content">
								<a href="Products.php">Electornics</a>
								<a href="#">Mens</a>
								<a href="#">Womens</a>
								<a href="#">Childern</a>
								<a href="#">Kidz</a>
								<a href="#">Sports</a>
							</div>
						</div>
					</li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div>
				<input type="text" name="searcgInput" value="Search...">
				<input type="submit" name="searcgInputSubmit" value="SEARCH">
			</div>
			<div class="right-ele">
				<span style="display: inline-block;">
					<?php
						if(!empty($_SESSION['username']))
						{ 
					?>
							<div class="dropdown">
									<a href=""><?php echo $_SESSION['username'] ?><i style="margin-right: 5px;" class="fas fa-sort-up"></i></a>
									<div class="dropdown-content">
										<a href="Products.php">Settings</a>
										<a href="logout.php">Log-Out</a>
									</div>
							</div>
					<?php
							}
						else{
							$link="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					?>			
							<a href="Login.php?link=<?php echo $link; ?>">Log-In</a>
					<?php
							}
					?>
				 </span>
				<a href="Cart.php"><i class="fas fa-shopping-cart"></i><sup><?php echo $_SESSION['cart_total'] ?></sup></a>
			</div>
	</header> 
			
	<section class="products-cont">
		
		<?php
			$sql="SELECT * FROM product";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result))
			{
		?>

		<div class="product-card">
			<form method="post" action="Addcart.php">
				<img src="File/<?php echo $row['img']?>" height="200px" width="150px" class="center">
				<div class="card-content">
					<h3><?php echo substr($row['product_name'],0,8).". . ." ?></h3>
					<span style="color: #9f6060;"><?php echo $row['price'] ?> TK</span>
					<span><?php echo $row['quantity'] ?> pcs Available</span>
					<div class="btn">
						<input type="submit" class="cartbtns" name="add_cart" value="Add To Cart">
						<a href="view.php">View</a>
					</div>
				</div>
				<input type="hidden" name="p_id" value="<?php echo $row['P_id'] ?>">
				<input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>">
				<input type="hidden" name="price" value="<?php echo $row['price'] ?>">
				<input type="hidden" name="quantity" value="1">
			</form>
		</div>
		
		<?php
			}
		?>

	</section>
	<div class="pagination" style="margin: auto;width: 50%;text-align: center;margin-top:auto;margin-bottom: 20px;">
		<span>Previous</span>
		<span>1</span>
		<span>2</span>
		<span>3</span>
		<span>4</span>
		<span>5</span>
		<span>6</span>
		<span>7</span>
		<span>Next</span>
	</div>

	<footer>
	<div>
		<h4>Usefull Links</h4>
		<span>Visit</span>
		<span>Contact</span>
		<span>About</span>
		<span>Mobile:1864322827</span>
	</div>
	<div>
		<h4>Our Services</h4>
		<span>We provide best services thoughout Bangladesh.</span>
		<span>We deliver our product all over the Bangladesh at any time.</span> 
	</div>

	<div>
		<h4>Follow Us</h4>
		<i class="fab fa-facebook-square fa-2"></i>
		<i class="fab fa-twitter-square"></i>
		<i class="fab fa-instagram-square"></i>
		<i class="fab fa-youtube-square"></i>
</div>
</footer>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>

