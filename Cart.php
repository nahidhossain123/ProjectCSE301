<?php
include('Connection.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
      <title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
	<body>
      	<table class="center-table">
      		
      		<tr>
      			<td colspan="5" style="border: none;text-align: left;padding: 0"><a href="Products.php">
  				<i class="fas fa-long-arrow-alt-left"></i>
      			Continue Shopping</a></td>
      		</tr>

      		<tr>
      			<th colspan="5" style="border: none;text-align: left;padding-left:0;padding-top: 20px;"><h3>Order Details</h3></th>
      		</tr>
      		<tr>
      			<th width="8%">NO.</th>
      			<th>Product Name</th>
      			<th>Quantity</th>
      			<th>Unit Price</th>
      			<th>Total Price</th>
      			<th>Action</th>
      		</tr>
                  <?php
                        $count=1;
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                               foreach ($_SESSION['cart'] as $key => $value) {
                                    $total+=$value['price']*$value['quantity'];
                  ?>
      		<tr>
      			<td><?php echo $count++; ?></td>
      			<td><?php echo $value['product_name'] ?></td>
      			<td width="13%">
                              <form action="changeQuantity.php" method="post">
                                   <button type="submit" name="minus" onclick="Minus()">-</button>
                                          <input type="hidden" name="p_id" value="<?php echo $value['p_id'] ?>">
                                          <input type="hidden" name="product_name" value="<?php echo $value['product_name'] ?>">
                                          <input type="hidden" name="price" value="<?php echo $value['price'] ?>">                           
                                          <input class="quantity" onchange="TotalPrice();" style="width: 30%;padding: 3px;text-align: center;" type="text" name="Quantity" value="<?php echo $value['quantity'] ?>" min="1" max="8">
                                    <button class="plus" type="submit" name="plus" >+</button> 
                              </form>                 
                        </td>
      			<td><?php echo $value['price'] ?><input class="price" type="hidden" name="price" value="<?php echo $value['price'] ?>"></td>
      			<td class="total_price"><?php echo $value['price']*$value['quantity'] ?></td>
      			<td width="12%">
                              <form action="remove.php" method="post">
                                    <input type="hidden" name="p_id" value="<?php echo $value['p_id'] ?>">
                                    <input type="submit" name="remove" value="Remove" style="padding: 5px 10px;background-color: red;border: none;color: white;border-radius:3px;">
                              </form>
                        </td>
      		</tr>
                  <?php
                        }
                  }
                  ?>
      		<tr>
      			<td colspan="4" style="text-align: right;font-weight: bold;">Total</td>
      			<td style="font-weight: bold;" id="grandTotal"><?php echo $total ?></td>
      			<td ></td>
      		</tr>
      		<tr>
      			<?php
                              if(!empty($_SESSION['cart']))
                              {
                        ?>
                                    <td colspan="6" style="border: none;text-align: right;padding-right: 0;padding-top: 30px;"><a style="background-color: #008CBA" href="Shippingaddress.php">Check Out
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                    </a></td>
                        <?php
                              }
                              else{
                        ?>
                                    <td colspan="6" style="border: none;text-align: right;padding-right: 0;padding-top: 30px;opacity: 0.2"><a style="background-color: #008CBA" href="#">Check Out
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                    </a></td>

                        <?php
                              }
                        ?>
      		</tr>
      	</table>

      

	</body>
</html>


<?php

?>