<?php include('inc/header.php'); ?>
   

<div class="signup-form">
    
<form name="signup" id="signup" action="inc/functions/signup.php" method="post">
    <title>Sign Up</title>
<h2>Sign Up</h2>
<p>Please fill in this form to create an account!</p><hr>

<div class="form-group">
<div class="row">
    <div class="col-xs-6">
    <label for="fname">First Name:</label>
    <input type="text" class="form-control" name="fname" placeholder="" >
    </div>

    <div class="col-xs-6">
    <label for="lname">Last Name:</label>
    <input type="text" class="form-control" name="lname" placeholder="" >
    </div>  
</div>        	
</div>
    
<div class="form-group">
<label for="email">E-Mail:</label>
<input type="email" class="form-control" name="email" placeholder="" >
</div>
<div class="form-group">
<label for="address">Address:</label>
<input type="text" class="form-control" name="address" placeholder="" >
</div>
<div class="form-group">
<label for="city">City:</label>
<input type="text" class="form-control" name="city" placeholder="" >
</div>
<div class="form-group">
<label for="phone">Phone:</label>
<input type="number" class="form-control" name="phone" placeholder="" >
</div>
<div class="form-group">
<label for="passsword">Password:</label>
<input type="password" class="form-control" name="password" placeholder="" >
</div>
<div class="form-group">
<label for="confirm_password">Confirm Password:</label>
<input type="password" class="form-control" name="confirm_password" placeholder="" >
</div>        

<div class="form-group">
<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="1"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
</div>

</form>
<div class="hint-text">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>

<?php include('inc/footer.php'); ?>