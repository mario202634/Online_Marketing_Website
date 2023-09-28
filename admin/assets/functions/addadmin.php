<?php
session_start();
include('../../../inc/config.php');
include('../../../inc/functions.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$fname=cleanui($_POST['fname']);
$lname=cleanui($_POST['lname']);
$email=cleanui($_POST['email']);
$pwd=cleanui($_POST['pwd']);

if(empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/", $fname)) alert('First Name is empty\nOnly letters and white space allowed');
elseif(empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/", $lname)) alert('Last Name is empty\nOnly letters and white space allowed');
elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) alert('Mail is empty or not correct');
elseif(empty($pwd)) alert('Password can not be empty');

    elseif($_POST)
    {
        
        $arr=array(
            "FirstName"=>"$fname",
            "LastName"=>"$lname",
            "Email"=>"$email",
            "Password"=>"$pwd"
        );
        $ins=Insert("admin", $arr);
        if($ins)
        {
            alert('Admin added successful');
           
        }
        else
        {
            alert('Admin adding failed');
            
        }
       exit('<META HTTP-EQUIV="refresh" content="0;URL=../../add_admin.php">');
    }



?>