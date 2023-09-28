<?php

include('../../../inc/config.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$prodid=cleanui($_GET['id']);

if(empty($prodid) || !is_numeric($prodid)) alert('ProductID must be filled out\nOnly numbers allowed');

elseif($_GET)
    {
        $ins=Delete("products", "ProdID=".$prodid);

    
        if($ins)
        {
            alert('Product deletion Successful');
        }
        else
        {
            alert('Product deletion failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_products.php">');


?>