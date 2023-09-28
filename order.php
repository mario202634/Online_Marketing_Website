<?php
include('inc/config.php');
include('inc/functions.php');
include('inc/header.php'); 
?>
    <title>Order placed</title>	

    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>


    <h1 class="site-header__title" data-lead-id="site-header-title">ORDER PLACED!</h1>
	

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks you for ordering from ShopCity. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
        <br>
        <br>
        <br>
	</div>

    <form action="category.php">
        <button onclick="category.php" type="submit" class="btn btn-primary btn-lgg" >Continue shopping</button>
   </form>

   <br>
    <br>
    <br>
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2022 | All Rights Reserved</p>
	
</body>

<?php include('inc/footer.php'); ?>