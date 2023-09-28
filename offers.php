<?php
include('inc/config.php');
include('inc/functions.php');
include('inc/header.php'); 
?>
<title>Offers</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
        
        <link href="offers.css" rel="stylesheet" />   
		<div class="offersContainer Black">
			<div class="orientationBtns ">
				<button onclick="makeVerticalList();" class="btn"><i class="fas fa-grip-vertical"></i></button>
				<button onclick="makeHorizontalList();" class="btn"><i class="fas fa-grip-horizontal"></i></button>
			</div>

			<!-- List Populated using javascript functions on clicking buttons -->
			<div class="container">
				<div id="verticalOfferList"></div>
			</div>
			<div class="container">
				<div id="horizontalOfferList"></div>
			</div>
		</div>
		


	</body>

  
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Shop<span>City</span></h3>

				<p class="footer-links">
					<a href="index.html" class="link-1">Home</a>
					
					<a href="contactus.html" target="_blank">Contact Us</a>
				
					<a href="faq.html" target="_blank">Faq</a>
					
                    <a href="https://www.google.com/maps/place/The+British+University+in+Egypt+-+BUE/@30.1177753,31.605976,15z/data=!4m2!3m1!1s0x0:0xfb58c4d6f97e0173?sa=X&ved=2ahUKEwjc0cfqufr2AhWpzIUKHUIMA7AQ_BJ6BAhVEAU" target="_blank">Location</a>
                    
                    <a href="aboutus.html">About us</a>
                    
				</p>

				<p class="footer-company-name">ShopCity © 2022</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>20 Random St., Sherouk City</span> Cairo, Egypt</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+201234567890</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@shopcity.com" target="_blank">support@shopcity.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About ShopCity</span>
					Whether you're looking for a Car, Furniture, Phone or an Appartment.
                    ShopCity got all of that covered for you at one place where you can look at advertisments of any product you want
                    <br>
                    ShopCity guarantees safety and honesty of every advertisment on our website.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>

				</div>

			</div>

		</footer>
    
    
</html>