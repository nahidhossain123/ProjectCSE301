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
	   			<td style="border: none;"><a href="javascript:history.back()">
	  				<i class="fas fa-long-arrow-alt-left"></i>
	      			Back</a>
	      		</td>
	   		</tr>
	   	</table>
 		<div class="bkashpayment-style" >
 			<h3>bKash Payment</h3>
 			<div class="payment-content" >
 				<p>Dear Sir,</p>
 				<p>You can make payments from your bKash Account to any “Merchant” who accepts “bKash Payment”. Now you can bKash your Payment at more than 47,000 outlets nationwide. To bKash your Payment follow the steps below.</p>
 			<br>
 			<ol>
 				<li>
 					 Go to your bKash Mobile Menu by dialing *247#.
 				</li>
 				<li>
 					 Choose “Payment”.
 				</li>
 				<li>
 					  Enter the Merchant bKash Account Number 01865555555.
 				</li>
 				<li>
 					 Enter the amount you want to pay
 				</li>
 				<li>
 					  Enter a reference* against your payment (you can mention the purpose of the transaction in one word. e.g. Bill)
 				</li>
 				<li>
 					 Enter the Counter Number* (the salesperson at the counter will tell you the number)
 				</li>
 				<li>
 					 Now enter your bKash Mobile Menu PIN to confirm
 				</li>
 				<li>
 					 Done! You will receive a confirmation message from bKash.
 				</li>
 				<li>
 					 Now enter your bKash Mobile Menu PIN to confirm
 				</li>
 			</ol>
 			<br>
 			<div>
 				Done! You will receive a confirmation message from bKash.
 			</div>
 			<div>
 				*If Reference or Counter No. or both are not applicable, you can skip them by entering \0\.
 			</div>
 			<br>
 			<label>Enter Your Transaction ID </label>
 			<input style="padding: 4px;width: 40%;margin-left: 10px;" type="text" name="transactionid">
 			<br><br>
 			<a style="text-decoration: none;background-color:  whitesmoke; border: 1px solid gray;padding: 5px 80px 5px 80px;float: right;" href="#">Confirm Payment</a>
 			</div>
 		</div>	
   </body>
</html>