<?php
session_start();
include('../config.php');
if(!authCust()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../login.php">');
       
        $today=date("Y-m-d");
        $cid=$_SESSION["cust"];
        $total=$_SESSION["orderTotal"];
        $arr=array(
            "OrderDate"=>"$today",
            "CID"=>"$cid",
            "OrderTotal"=>"$total",
            "OrderStatus"=>"Done"
        );
       $ins=Insert("orders", $arr);
        if($ins)
        {
            $_SESSION["orderTotal"]="";
            $arr=array("cart"=>"");
        
            Update("customer", $arr, "CustID=$cid");
            exit('<META HTTP-EQUIV="refresh" content="0;URL=../../order.php">');
        }
        else
        {
            alert('Order failed');
        }



?>