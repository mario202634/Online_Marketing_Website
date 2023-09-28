<?php

include('../../../inc/config.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$CustID=cleanui($_GET['id']);

if(empty($CustID) || !is_numeric($CustID)) alert('CustomerID must be filled out\nOnly numbers allowed');

elseif($_GET)
    {
        $ins=Delete("customer", "CustID=".$CustID);

    
        if($ins)
        {
            alert('Customer deletion Successful');
        }
        else
        {
            alert('Customer deletion failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_customer.php">');


?>