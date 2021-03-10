<?php
include('Connection.php');
session_start();
      if(isset($_POST['plus']))
      {
            if($_POST['Quantity']<8)
            {
              $quantity= $_POST['Quantity'];
              $quantity+=1;
              foreach ($_SESSION['cart'] as $key => $value) {
                   if($value['p_id']==$_POST['p_id'])
                   {
                        $_SESSION['cart'][$key]=array('product_name' =>$_POST['product_name'] ,'price'=>$_POST['price'],'quantity'=>$quantity,'p_id'=>$_POST['p_id']); 
                        header("Location:Cart.php");      
                   }
              }
            }
            else
            {
              header("Location:Cart.php");
            }
      }

      if(isset($_POST['minus']))
      {
            if($_POST['Quantity']>1)
            {
              $quantity= $_POST['Quantity'];
              $quantity-=1;
              foreach ($_SESSION['cart'] as $key => $value) {
                   if($value['p_id']==$_POST['p_id'])
                   {
                        $_SESSION['cart'][$key]=array('product_name' =>$_POST['product_name'] ,'price'=>$_POST['price'],'quantity'=>$quantity,'p_id'=>$_POST['p_id']); 
                        header("Location:Cart.php");      
                   }
              }
            }
            else
            {
              header("Location:Cart.php");
            }
      }
?>