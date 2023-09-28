<?php
include('inc/config.php');
include('inc/functions.php');
include('inc/header.php');

?>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
      <title>Home</title>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="cars.php"><img src="images/Cars.jpg" alt="Cars"></a>
      <div class="carousel-caption">
        <h3>Looking for a new Car?</h3>
        <p>Shop now</p>
      </div>
    </div>

    <div class="item">
        <a href="apartments.php"><img src="images/Apartments.jpg" alt="Apartments"></a>
      <div class="carousel-caption">
        <h3>Looking for a new Apartment?</h3>
        <p>Shop now</p>
      </div>
    </div>

    <div class="item">
        <a href="phones.php"><img src="images/Phones.jpg" alt="Phones"></a>
      <div class="carousel-caption">
        <h3>Looking for a new Phone?</h3>
        <p>Shop now</p>
      </div>
    </div>
      
    <div class="item">
        <a href="furniture.php"><img src="images/Furniture.jpg" alt="Furniture"></a>
      <div class="carousel-caption">
        <h3>Looking for new Furniture?</h3>
        <p>Shop now</p>
      </div>
    </div>
      
      
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</body>
    
<?php include('inc/footer.php'); ?>