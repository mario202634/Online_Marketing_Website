<?php

include('../../../inc/config.php');
include('../../../inc/functions.php');
//if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');

$catname=cleanui($_POST['catname']);

if(empty($catname)) alert('Category Name is empty');

    elseif($_POST)
    {
        
        $arr=array(
            "CategoryName"=>"$catname"
        );
        $ins=Insert("categories", $arr);
        /*$ins=Insert("customer", "`CustFirstName`, `CustLastName`, `CustEmail`, `CustPassword`, `CustAddress`, `CustCity`, `CustPhone`", "'$fname','$lname','$email','$pwd','$address','$city','$phone'");*/
        if($ins)
        {
            alert('Category added Successful');
        }
        else
        {
            alert('Category adding failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../add_category.php">');


?>