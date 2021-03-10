<?php
include("Connection.php");
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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body style="background-color: whitesmoke;">
<header>
	<label>Ecommerce</label>
		<nav>
			<ul class="Nav-links">
				<li><a href="#">Home</a></li>
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
			
<section>
	<div class="Services-cont">
		<h5>20% Off On Every Sell </h5>
		<span>We Provides Best Services</span>
	</div>

	<div class="product-container">
		<div class="slider-container">
			<div class="photoHeader">
				<span s">Smart Phones</span>
			<a style="color: #C2830B;text-decoration: none;" href="#">Shop Now</a>
			</div>
			<div class="slide-wraper">
				<i id="arrowleft" class="fas fa-chevron-circle-left"></i>
				<div id="slider" style="scroll-behavior: smooth;">
					<?php 
						$sql="SELECT * FROM product WHERE type='mobile' LIMIT 15";
						$reslut=mysqli_query($conn,$sql);
						while ($row=mysqli_fetch_assoc($reslut)) {
							$img=$row['img'];
					?>
					<div class="HeaderImageDiv">
						<a href="view.php">
							<img src="File/<?php echo $img ?>" height="200px" width="105px">
						</a>
					</div>

					<?php
					}
					?>
				</div>
				<i id="arrowright" class="fas fa-chevron-circle-right"></i>
			</div>
		</div>
	</div>

	<div class="photo-container">
		<div class="photoHeader">
			<span s">Monitor</span>
			<a style="color: #C2830B;text-decoration: none;" href="#">Shop Now</a>
		</div>
		<div class="photoHederImg">
			<?php 
				$sql="SELECT * FROM product WHERE type='monitor' LIMIT 9";
				$reslut=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_assoc($reslut)) {
					$img=$row['img'];
			?>
			<div class="HeaderImageDiv">
				<img src="File/<?php echo $img ?>" height="200px" width="105px">
			</div>

			<?php
			}
			?>
		</div>	
	</div>

	<div class="photo-container">
		<div class="photoHeader">
			<span s">Eletric Fan</span>
			<a style="color: #C2830B;text-decoration: none;" href="#">Shop Now</a>
		</div>
		<div class="photoHederImg">
			<?php 
				$sql="SELECT * FROM product WHERE type='fan' LIMIT 9";
				$reslut=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_assoc($reslut)) {
					$img=$row['img'];
			?>
			<div class="HeaderImageDiv">
				<img src="File/<?php echo $img ?>" height="200px" width="105px">
			</div>

			<?php
			}
			?>
		</div>	
	</div>

	<div class="photo-container">
		<div class="photoHeader">
			<span s">Speaker</span>
			<a style="color: #C2830B;text-decoration: none;" href="#">Shop Now</a>
		</div>
		<div class="photoHederImg">
			<?php 
				$sql="SELECT * FROM product WHERE type='speaker' LIMIT 9";
				$reslut=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_assoc($reslut)) {
					$img=$row['img'];
			?>
			<div class="HeaderImageDiv">
				<img src="File/<?php echo $img ?>" height="200px" width="105px">
			</div>

			<?php
			}
			?>
		</div>	
	</div>
</section>		 
		
		
		
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

<script type="text/javascript">
	let arrowright=document.getElementById('arrowright');
	let arrowleft=document.getElementById('arrowleft');

	arrowleft.addEventListener('click',function()
	{
		document.getElementById('slider').scrollLeft -= 400
	})
	arrowright.addEventListener('click',function()
	{
		document.getElementById('slider').scrollLeft += 400
	})

</script>
</body>
</html>