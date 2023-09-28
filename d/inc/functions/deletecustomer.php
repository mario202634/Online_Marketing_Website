<?php
session_start();
include('../config.php');
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
$id=cleanui($_SESSION["cust"]);

        $ins=Delete("customer", "CustID=".$id);

    
        if($ins)
        {
            alert('Customer deletion Successful');
            $_SESSION = array();
            session_unset();
            session_destroy();
            exit('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
        }
        else
        {
            alert('Customer deletion failed');
        }
    
?>