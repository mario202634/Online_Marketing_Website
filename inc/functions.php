<?php
//include('config.php');
/*
    Usage:
    1.Insert:
    $fieldsArr['AttributeName'] = 'Value';
    $fieldsArr['Age'] = '36';
    Insert("Table", $fieldsArr);
    
    2.Update
    Update("Table", $fieldsArr, "Where Condition"); P.S: Where condition is mandatory to avoid updating all the records
    
    3.Select (Deleted)
    Select("Table", "Attributes", "Where condition"); P.S: Attributes/Where Condition are optional
    
    4.Delete
    Delete("Table", "Where Condition"); P.S: Where condition is mandatory to avoid deleting all the records
    
    5.Alert
    alert('Your Message');
    
    6. Get Category Name from ID
    getCat($id);
    
    7. Check if Admin is logged in/authenticated
    authAdmin(); P.S: Return true/false
    
    8. Check if Customer is logged in/authenticated
    authCust(); P.S: Return true/false
    
    9. Get Customer Name from ID
    getCustName($id);
*/

function Insert($table,&$fields)
{
    global $con;
    $query = "insert into $table (`".implode("` , `",array_keys($fields))."`) values ('".implode("' , '",array_values($fields))."'); ";
	$result=mysqli_query($con, $query);
    return $result;
}

function Update($table, &$fields, $condition) 
{
    global $con;
    $query="update `$table` set ";
    
    
    foreach($fields as $key => $val)
    {
        $query.=$key."="."'$val'";
        if($key != array_key_last($fields))
        {
            $query.=", ";
        }
    }
    $query .= " where ".$condition."; ";
    $result=mysqli_query($con, $query);
    return $result;
}

function Delete($table, $condition)
{
    global $con;
    $query="DELETE FROM ".$table." WHERE ".$condition."; ";
    $result=mysqli_query($con, $query);
    return $result;
}

function cleanui($userinput)
{
    global $con;
    if (empty($userinput))
    {
        return false;
    }
    else
    {   
        $userinput = htmlspecialchars($userinput);
        $userinput = mysqli_real_escape_string($con, $userinput);
    } 
    return $userinput;
    
}

// Popping Alert Function
function alert($message)
{
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

//Get Category name
function getCat($id)
{
    global $con;
    $id=cleanui($id);
    $sql = "SELECT `CategoryName` FROM `categories` WHERE `CategoryID`='$id'";
    $query=mysqli_query($con, $sql);
    $result=mysqli_fetch_array($query);
    return $result['CategoryName'];
}

//Authenticate Admin
function authAdmin()
{
    global $con;
    $admin=cleanui($_SESSION["admin"]);
    $sql = "SELECT EXISTS(SELECT 1 FROM `admin` WHERE `AdminID`='$admin' LIMIT 1)";
    if ($query=mysqli_query($con, $sql))
    {     
        $result=mysqli_fetch_row($query);
        return (bool)($result[0]);
    }
    else
    {
        return false;
    }
}

//Authenticate Customer
function authCust()
{
    global $con;
    $cust=cleanui(isset($_SESSION["cust"]));
    $sql = "SELECT EXISTS(SELECT 1 FROM `customer` WHERE `CustID`='$cust' LIMIT 1)";
    if ($query=mysqli_query($con, $sql))
    {     
        $result=mysqli_fetch_row($query);
        return (bool)($result[0]);
    }
    else
    {
        return false;
    }
}

//Get Customer Name
function getCustName($id)
{
    global $con;
    $id=cleanui($id);
    $sql = "SELECT `CustFirstName` FROM `customer` WHERE `CustID`='$id'";
    $query=mysqli_query($con, $sql);
    $result=mysqli_fetch_array($query);
    return $result['CustFirstName'];
}
?>