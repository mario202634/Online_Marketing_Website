<?php

include('../../../inc/config.php');
include('../../../inc/functions.php');
//if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$id=cleanui($_GET['id']);
$pname=cleanui($_POST['pname']);
$catid=cleanui($_POST['catid']);
$pdescription=cleanui($_POST['pdescription']);
$pquantity=cleanui($_POST['pquantity']);
$pprice=cleanui($_POST['pprice']);

if(empty($pname)) alert('Product Name is empty');
elseif(empty($catid) || !is_numeric($catid)) alert('Category must be filled out');
elseif(empty($pdescription)) alert('Description must be filled out');
elseif(empty($pquantity) || !is_numeric($pquantity)) alert('Quantity must be filled out\nOnly numbers allowed');
elseif(empty($pprice) || !is_numeric($pprice)) alert('Price must be filled out\nOnly numbers allowed');
       

    elseif($_POST)
    {
            /* Image uploader */
            if($_FILES["pimage"]["name"])
            {
            $target_dir="../../../images/";
            $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
    
            // Select file type
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $file_name=$name.rand().".".$FileType;
  
            // Upload file
            move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir.$file_name);
            $arr=array(
                "PName"=>"$pname",
                "CatID"=>"$catid",
                "PDescription"=>"$pdescription",
                "PQuantity"=>"$pquantity",
                "PPrice"=>"$pprice",
                "PImage"=>"$file_name"
            );
            }
        else
        {
            $arr=array(
            "PName"=>"$pname",
            "CatID"=>"$catid",
            "PDescription"=>"$pdescription",
            "PQuantity"=>"$pquantity",
            "PPrice"=>"$pprice"
            );
        }
        $ins=Update("products", $arr, "ProdID=$id");
        if($ins)
        {
            alert('Product editing successful');
        }
        else
        {
            alert('Product editing failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../view_products.php">');



?>