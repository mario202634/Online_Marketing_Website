<?php

include('../../../inc/config.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$id=cleanui($_GET['id']);
$fname=cleanui($_POST['fname']);
$lname=cleanui($_POST['lname']);
$email=cleanui($_POST['email']);
$pwd=$_POST['pwd'];



if(empty($fname)) alert('Admin First Name is empty');
elseif(empty($lname)) alert('Admin Last Name must be filled out');
elseif(empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)) alert('Email is empty or not correct');


    elseif(!empty($pwd))
        
    {           $pwd=password_hash($pwd,PASSWORD_DEFAULT);
                
                $arr=array(
                "FirstName"=>"$fname",
                "LastName"=>"$lname",
                "Email"=>"$email",
                "Password"=>"$pwd"
            
            );
            }
        else
        {
            $arr=array(
                "FirstName"=>"$fname",
                "LastName"=>"$lname",
                "Email"=>"$email",
            
            );
        }
        $ins=Update("admin", $arr, "AdminID=$id");
        if($ins)
        {
            alert('Admin editing successful');
        }
        else
        {
            alert('Admin editing failed');
        }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_admins.php">');



?>