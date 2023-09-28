<?php 
include('inc/header.php'); 
 
?>
<link rel="stylesheet" href="product.css" >
<title>Apartments</title>
  
<?php
            $query="SELECT `ProdID`, `PName`, `CatID`, `PDescription`, `PQuantity`, `PPrice`, `PImage` FROM `products` WHERE CatID=2";
     
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>

       



<div class="container page-wrapper">
  <div class="page-inner">
    <div class="row">
      <div class="el-wrapper">
        <div class="box-up">
          <img class="img" src="images/<?php echo $row['PImage']; ?>" alt="Image" width="315px" height="300px">
          <div class="img-info">
            <div class="info-inner">
              <span class="p-name"><?php echo $row['PName']; ?></span>
              <span class="p-company"><?php echo $row['PDescription']; ?></span>
            </div>
            
          </div>
        </div>

        <div class="box-down">
          <div class="h-bg">
            <div class="h-bg-inner"></div>
          </div>

          <a class="cart" href="inc/functions/addtocart.php?id=<?php echo $row['ProdID']; ?>">
            <span class="price"><?php echo $row['PPrice']; ?></span>
            <span  class="add-to-cart">
             <span  class="txt">Add to cart</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
     
</div>




<?php
            }
            mysqli_free_result($result);

            ?>


</body>    










