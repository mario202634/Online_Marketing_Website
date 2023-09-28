<?php

include('../../../inc/config.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
$pname=cleanui($_POST['pname']);
$catid=cleanui($_POST['catid']);
$pdescription=cleanui($_POST['pdescription']);
$pquantity=cleanui($_POST['pquantity']);
$pprice=cleanui($_POST['pprice']);

if(empty($pname)) alert('Product Name is empty');
elseif(empty($catid) || !is_numeric($catid)) alert('Category must be filled out');
elseif(empty($pdescription)) alert('Description is empty');
elseif(empty($pquantity) || !is_numeric($pquantity)) alert('Quantity must be filled out\nOnly numbers allowed');
elseif(empty($pprice) || !is_numeric($pprice)) alert('Price must be filled out\nOnly numbers allowed');
       

    elseif($_POST)
    {
            /* Image uploader */
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
            "PImage"=>"$file_name",
        );
        $ins=Insert("products", $arr);
        /*$ins=Insert("customer", "`CustFirstName`, `CustLastName`, `CustEmail`, `CustPassword`, `CustAddress`, `CustCity`, `CustPhone`", "'$fname','$lname','$email','$pwd','$address','$city','$phone'");*/
        if($ins)
        {
            alert('Product added successful');
        }
        else
        {
            alert('Product adding failed');
        }
    }
exit('<META HTTP-EQUIV="refresh" content="0;URL=../../add_product.php">');



?>