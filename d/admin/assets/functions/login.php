<?php

include('../../../inc/config.php');
include('../../../inc/functions.php');

$email=cleanui($_POST['uname']);
$password=cleanui($_POST['pwd']);
$query = "select `AdminID`,`Password` FROM `admin` WHERE `Email`='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$password=password_verify($password, $row['Password']);
if($password)
{
    session_start();
    $_SESSION["admin"] = $row['AdminID'];
    alert('Logged In');
    exit('<META HTTP-EQUIV="refresh" content="0;URL=../../dashboard.php">');
}
else
{
    alert('Wrong E-Mail or Password');
    exit('<META HTTP-EQUIV="refresh" content="0;URL=../../index.php">');
}

mysqli_close($con);



?>