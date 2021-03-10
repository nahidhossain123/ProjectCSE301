<?php
include('Connection.php');
session_start();
      if(isset($_POST['remove']))
      {
            foreach ($_SESSION['cart'] as $key => $value) {
                 if($value['p_id']==$_POST['p_id'])
                 {
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart']=array_values($_SESSION['cart']);
                        header("Location:Cart.php");   
                 }
            }
      }
?>