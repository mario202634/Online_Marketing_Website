<?php

include('../config.php');


$email=$_POST['email'];

$msg=$_POST['msg'];


if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) alert('Mail is empty or not correct');
elseif(empty(msg)) alert('Message must be filled out');
elseif(!isset($_POST['checkbox'])) alert('Checkbox must be checked');


$to = "info@shopcity.com";
$subject = "Contact Us form";
$headers = "From: <". $email . ">" . "\r\n";

$send=mail($to,$subject,$msg,$headers);

if($send)
{
    alert('Message Sent');
}
else
{
    alert('Sending failed');
}

 exit('<META HTTP-EQUIV="refresh" content="0;URL=../../contactus.php">');

?>