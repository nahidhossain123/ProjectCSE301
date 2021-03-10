<!DOCTYPE html>
<html>
<head>
	<title>Product View</title>
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
				<a href="Cart.php"><i class="fas fa-shopping-cart"></i><sup>20</sup></a>
			</div>
	</header>

	<div class="main">
		<div class="image">
			<div style="padding: 10px; border: 1px solid whitesmoke;">
				<img id="featured" src="File/giant_86958.jpg" width="100%" height="100%">
			</div>
			<div class="sub-image">
				<div style="padding: 10px; border: 1px solid whitesmoke;height: 80%">
					<img class="thumbnail active" src="File/giant_86958.jpg" width="100%" height="100%">
				</div>
				<div style="padding: 10px; border: 1px solid whitesmoke;height: 80%">
					<img class="thumbnail" src="File/HMUB2.jpg" width="100%" height="100%">
				</div>
				<div style="padding: 10px; border: 1px solid whitesmoke;height: 80%">
					<img class="thumbnail" src="File/823477-loud-vsn-201.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
		<div class="product-details">
			<h1>Product Name</h1>
			
			<label style="font-weight: bold;">TK 500.00</label>

			<label>Available In Stock</label>
			
			<div>
				<input type="number" name="quantity" style="width: 45px;padding: 5px;" min="1" max="10" value="1">
				<input type="submit" name="addcart" value="Add To Cart" style="padding: 8px 20px;background-color: #F7BB48 ;border: none;font-weight: bold;border-radius: 3px">
			</div>
			
			<label style="padding-bottom:0px;">Brand : Samsung</label>
			
			<label>Type : Fan</label>
			
			<h3 style="padding-bottom:0px;">Product Description</h3>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
		</div>
	</div>

	<script type="text/javascript">
		let active=document.getElementsByClassName('active');
		let thumbnail=document.getElementsByClassName('thumbnail');

		for(var i=0;i<thumbnail.length;i++)
		{
			thumbnail[i].addEventListener('mouseover',function()
			{
				if(active.length>0)
				{
					active[0].classList.remove('active');
				}
				this.classList.add('active');
				console.log(this.src);
				document.getElementById('featured').src=this.src;
			})
		}
	</script>
</body>
</html>