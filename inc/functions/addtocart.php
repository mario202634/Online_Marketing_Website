<?php
session_start();
include('../config.php');
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
$id=cleanui($_GET['id']);
$id=$id.",";
$cust=cleanui($_SESSION["cust"]);
        
/*        $arr=array(
            "cart"=>"CONCAT(cart, $id)"
        );*/
/*
        $ins=Update("customer", $arr, "CustID=".$cust);
*/
            $query="UPDATE customer SET cart=CONCAT(IFNULL(cart, ''), '$id') WHERE `CustID`='$cust'; ";
            $query.="UPDATE `products` SET `PQuantity`=PQuantity-1 WHERE `ProdID`=$id; ";
            $result=mysqli_multi_query($con, $query);
    
        if($result)
        {
            alert('Product added Successfully');
        }
        else
        {
            alert('Product adding failed');
        }
    /*exit('<META HTTP-EQUIV="refresh" content="0;URL=../../cart.php">');*/
?>