<?php

$dbhost="localhost";
$dbuser="root";
$dbpwd="12345678";
$dbname="ip";

$con=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if(!$con)
{
    echo "<center><h1>Database Connection Error</h1></center>";
}


?>