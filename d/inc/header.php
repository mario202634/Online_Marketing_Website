<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
  <link rel="stylesheet" href="style.css">
  <script src="scripts/offers.js" defer></script>

</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ShopCity</a>
    </div>
    <ul class="nav navbar-nav">
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="offers.php">Offers</a></li>
        <li><a href="Category.php">Category</a></li>
        <?php if(authCust()) { ?>
        <li><a href="view_account.php"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo getCustName($_SESSION["cust"]); ?></a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="inc/functions/signout.php"><span class="glyphicon glyphicon-log-"> </span> Logout</a></li>
        <?php
        } else {
        ?>
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
    
    </ul>
  </div>
</nav>   