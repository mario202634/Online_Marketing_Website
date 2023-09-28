<?php

include('../../../inc/config.php');
include('../../../inc/functions.php');
//if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$adminID=cleanui($_GET['id']);

if(empty($adminID) || !is_numeric($adminID)) alert('AdminID must be filled out\nOnly numbers allowed');

elseif($_GET)
    {
        $ins=Delete("admin", "AdminID=".$adminID);

    
        if($ins)
        {
            alert('Admin deletion Successful');
        }
        else
        {
            alert('Admin deletion failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_admins.php">');


?>