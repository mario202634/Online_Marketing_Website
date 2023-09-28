<?php include('inc/header.php'); ?>
   

<title>Login</title>
<div class="signup-form">
    <form name="login" id="login" action="inc/functions/login.php" method="post">
		
        <h2>Login</h2>
        
		<p>Fill the form to Login </p>
		<hr>
    
        <div class="form-group">
            <label for="email">E-Mail:</label>
        	<input type="email" class="form-control" name="email" placeholder="" >
        </div>
	
		<div class="form-group">
            <label for="password">Password</label>
           
            <input id="click" type="password" class="form-control" name="password" placeholder="" >
        </div>        
        
   
        
	     <button type="submit" class="btn btn-primary btn-lg">Login </button>
    </form>

<div class="hint-text">Don't have an account? <a href="signup.php">Sign Up Here!</a></div>
</div>
</body>

<?php include('inc/footer.php'); ?>