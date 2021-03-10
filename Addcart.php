<?php
session_start();
	if(isset($_POST['add_cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'],'p_id');
			if(in_array($_POST['p_id'], $myitems))
			{
				header("Location:Products.php");
			}
			else
			{
				$index=count($_SESSION['cart']);
				$_SESSION['cart'][$index]=array('product_name' =>$_POST['product_name'] ,'price'=>$_POST['price'],'quantity'=>$_POST['quantity'],'p_id'=>$_POST['p_id']);
				
					header("Location:Products.php");
					//$_SESSION['cart_total']=count($_SESSION['cart']);
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('product_name' =>$_POST['product_name'] ,'price'=>$_POST['price'],'quantity'=>$_POST['quantity'],'p_id'=>$_POST['p_id']);
			header("Location:Products.php");
			
		}
	}
?>