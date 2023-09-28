<?php include('inc/header.php');
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../login.php">');
?>
<title>Cart</title>
<link rel="stylesheet" href="cart.css">
<div class="wrap cf">
  <h1 class="projTitle">Hope you enjoyed shopping at<span> ShopCity</span></h1>
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="category.php" class="continue">Continue Shopping</a>
  </div>
  <div class="cart">
<!--    <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
       <li>Remove</li>
    </ul>-->
    <ul class="cartWrap">
        <?php
        $query="SELECT `cart` FROM `customer` WHERE `CustID`=".$_SESSION["cust"];
            $result=mysqli_query($con, $query);
            $row=mysqli_fetch_array($result);
            if(isset($row['cart']))
            $arr=explode(",", $row['cart']);
            $totalprice=0;
            foreach($arr as $val)
            {
                if(!empty($val))
                {
                $query="SELECT `ProdID`, `PName`, `PPrice`, `PImage` FROM `products` WHERE `ProdID`=$val";
                $result=mysqli_query($con, $query);
                $row=mysqli_fetch_array($result);
                $totalprice=$totalprice+$row['PPrice'];
        ?>
      <li class="items even">
        
    <div class="infoWrap"> 
        <div class="cartSection">
        <img src="images/<?php echo $row['PImage']; ?>" alt="" class="itemImg"/>
          <p class="itemNumber">#<?php echo $row['ProdID']; ?></p>
            <h3><?php echo $row['PName']; ?></h3>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p><?php echo $row['PPrice']; ?> EGP</p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
      </div>
      </li>
        <?php
            }
            }
        ?>
      
      
      <!--<li class="items even">Item 2</li>-->
 
    </ul>
  </div>
  
  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value"><?php echo $totalprice; ?> EGP</span></li>
      
          <li class="totalRow"><span class="label">Shipping</span><span class="value">50 EGP</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value"><?php echo $tax=$totalprice*0.05; ?> EGP</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value"><?php echo $totalprice+$tax+50; ?> EGP</span></li>
      <li class="totalRow"><a href="inc/functions/order.php" class="btn continue">Order</a></li>
    </ul>
  </div>
</div>

<?php $_SESSION["orderTotal"]=$totalprice+$tax+50; ?>
</body>    


<?php include('inc/footer.php'); ?>