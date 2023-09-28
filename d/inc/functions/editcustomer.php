<?php
session_start();
include('../config.php');
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
$id=cleanui($_SESSION["cust"]);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$pwd=$_POST['password'];

if(empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/", $fname)) alert('First Name is empty\nOnly letters and white space allowed');
elseif(empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/", $lname)) alert('Last Name is empty\nOnly letters and white space allowed');
elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) alert('Mail is empty or not correct');
elseif(empty($address)) alert('Address must be filled out');
elseif(empty($city)) alert('City must be filled out');
elseif(empty($phone) || !is_numeric($phone)) alert('Phone must be filled out\nOnly numbers allowed');


    elseif($_POST)
    {
        $pwd=password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        
        $arr=array(
            "CustFirstName"=>"$fname",
            "CustLastName"=>"$lname",
            "CustEmail"=>"$email",
            "CustPassword"=>"$pwd",
            "CustAddress"=>"$address",
            "CustCity"=>"$city",
            "CustPhone"=>"$phone"
        );
        $ins=Update("customer", $arr, "CustID=$id");
        if($ins)
        {
            alert('Account editing successful');
        }
        else
        {
            alert('Account editing failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_account.php">');




?>