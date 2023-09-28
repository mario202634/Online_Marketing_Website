<?php include('inc/header.php'); ?>
   
    
        <title>Contact Us</title>
<div class="signup-form">
    <form name="ContactUs" id="ContactUs" action="inc/functions/contactus.php" method="post">
		
        <h2>Contact Us</h2>
        
		<p>Fill the form to contact us </p>
		<hr>
    
        <div class="form-group">
            <label for="email">E-Mail:</label>
        	<input type="email" class="form-control" name="email" placeholder="" >
        </div>
	
		<div class="form-group">
            <label for="msg">Message</label>
            <div class="textbox"></div>
            <input type="message" class="form-control" name="msg" placeholder="" >
        </div>        
        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" name= "checkbox" value="1" >I am not a robot  <a href="#"></a></label>
		</div>
        
	     <button type="submit" class="btn btn-primary btn-lg">Submit </button>
        
    </form>
<br>
    <br>
    <br>
    <br>
 
</div>
</body>
    
<?php include('inc/footer.php'); ?>