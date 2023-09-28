<?php 
include('inc/config.php');
include('inc/functions.php');
include('inc/header.php'); 
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
$id=cleanui($_SESSION["cust"]);
$query="SELECT * FROM `customer` WHERE `CustID`='$id';";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);          
?>

<div class="signup-form">
    <title>View Account</title>
<h2>Account Info.</h2>

<form name="signup" id="signup" action="inc/functions/editcustomer.php" method="post">
<thead>
<div class="form-group">
    <div class="row">
        <div class="col-xs-6">
         <label for="fname">First Name:</label>
        <input type="text" class="form-control" name="fname" placeholder="" value="<?php echo $row['CustFirstName']; ?>">
        </div>

        <div class="col-xs-6">
         <label for="lname">Last Name:</label>
        <input type="text" class="form-control" name="lname" placeholder="" value="<?php echo $row['CustLastName']; ?>">
        </div>  
    </div>        	
</div>
    
    
<div class="form-group">
<label for="email">E-Mail:</label>
<input type="email" class="form-control" name="email" placeholder="" value="<?php echo $row['CustEmail']; ?>">
</div>
    
    
<div class="form-group">
<label for="address">Address:</label>
<input type="text" class="form-control" name="address" placeholder="" value="<?php echo $row['CustAddress']; ?>">
</div>
    
    
<div class="form-group">
<label for="city">City:</label>
<input type="text" class="form-control" name="city" placeholder="" value="<?php echo $row['CustCity']; ?>"></div>
    
    
<div class="form-group">
<label for="phone">Phone:</label>
<input type="text" class="form-control" name="phone" placeholder="" value="<?php echo $row['CustPhone']; ?>">
</div>
    
    
<div class="form-group">
<label for="passsword">New Password:</label>
<input type="password" class="form-control" name="password" placeholder="">
</div>
  



<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg">Update Data</button>
</div>
    
    
<a href="inc/functions/deletecustomer.php?id=<?php echo $row['CustID']; ?>"><i class="fa fa-trash"></i></a>



</thead>
    
</div>

</form>


</body>

<?php include('inc/footer.php'); ?>