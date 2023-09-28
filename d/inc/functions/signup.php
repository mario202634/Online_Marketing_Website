<?php

include('../config.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$pwd=$_POST['password'];
$pwdconf=$_POST['confirm_password'];

if(empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/", $fname)) alert('First Name is empty\nOnly letters and white space allowed'); 
elseif(empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/", $lname)) alert('Last Name is empty\nOnly letters and white space allowed');
elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) alert('Mail is empty or not correct');
elseif(empty($address)) alert('Address must be filled out');
elseif(empty($city)) alert('City must be filled out');
elseif(empty($phone) || !is_numeric($phone)) alert('Phone must be filled out\nOnly numbers allowed');
elseif($pwd!=$pwdconf) alert('Passwords do not match');
elseif(!isset($_POST['checkbox'])) alert('Checkbox must be checked');

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
        $ins=Insert("customer", $arr);
        if($ins)
        {
            alert('Registeration Successful');
            exit('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
        }
        else
        {
            alert('Registeration Failed');
            exit('<META HTTP-EQUIV="refresh" content="0;URL=../../signup.php">');
        }
    }



?>