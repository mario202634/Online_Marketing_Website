<?php
session_start();
include('../config.php');
$email=cleanui($_POST['email']);
$password=cleanui($_POST['password']);
$query = "SELECT * FROM `customer` WHERE `CustEmail`='$email'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$password=password_verify($password, $row['CustPassword']);
if($password)
{
    $_SESSION["cust"] = $row['CustID'];
    alert('Logged in');
    exit('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
}
else
{
    alert('Wrong E-Mail or Password');
    exit('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
}

mysqli_close($con);

?>