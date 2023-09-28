<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
if(!authAdmin()) header("Location: index.php");

$ordersSql = "SELECT `OrderID` FROM `orders`";
$result = mysqli_query($con, $ordersSql);
$orders_rows = mysqli_num_rows($result);

$ProdSql = "SELECT `ProdID` FROM `products`";
$result = mysqli_query($con, $ProdSql);
$prod_rows = mysqli_num_rows($result);

$CustSql = "SELECT `CustID` FROM `customer`";
$result = mysqli_query($con, $CustSql);
$cust_rows = mysqli_num_rows($result);
?>
<title>Dashboard</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row">
            <div class="col-md-4">
                <div class="iconparent"><i class="fa fa-chevron-up text-white bg-danger border rounded-circle border-danger icon"></i></div>
                <div class="textparent">
                    <p><?php echo $orders_rows; ?></p><span>Orders</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconparent"><i class="fa fa-archive text-white bg-danger border rounded-pill border-danger icon"></i></div>
                <div class="textparent">
                    <p><?php echo $prod_rows; ?></p><span>Products</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconparent"><i class="fa fa-user text-white bg-danger border rounded-circle border-danger icon" style="padding-left: 7px;width: 40.5781px;"></i></div>
                <div class="textparent">
                    <p><?php echo $cust_rows; ?></p><span>Customers</span>
                </div>
            </div>
        </div>
    </div>
   <div class="container tablediv">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p style="margin-top: 15px;">Last Orders</p>
                </div>
                <div>
                    <div>
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><i class="fa fa-list"></i>&nbsp;ID</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;Customer</th>
                <th><i class="fa fa-money"></i>&nbsp;Total Price</th>
                <th><i class="fa fa-tasks"></i>&nbsp;Date</th>
                <th><i class="fa fa-tasks"></i>&nbsp;Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT `OrderID`, `OrderDate`, `CID`, `OrderTotal`, `OrderStatus` FROM `orders` ORDER BY OrderID DESC; ";
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['OrderID']; ?></td>
                <td><?php echo getCustName($row['CID']); ?></td>
                <td><?php echo $row['OrderTotal']; ?></td>
                <td><?php echo $row['OrderDate']; ?></td>
                <td><?php echo $row['OrderStatus']; ?></td>
            </tr>
            <?php
            }
            mysqli_free_result($result);
            ?>
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('assets/footer.php'); ?>