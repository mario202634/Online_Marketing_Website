<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
<title>View Producs</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row">
        </div>
    </div>
    <div class="container tablediv">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p style="margin-top: 15px;">Products List</p>
                </div>
                <div>
                    <div>
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><i class="fa fa-archive"></i>&nbsp;Product</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;Category</th>
                <th><i class="fa fa-plus"></i>&nbsp;Quantity</th>
                <th><i class="fa fa-money"></i>&nbsp;Price</th>
                <th><i class="fa fa-tasks"></i>&nbsp;Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT `ProdID`, `PName`, `CatID`, `PQuantity`, `PPrice` FROM `products`";
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['PName']; ?></td>
                <td><?php echo getCat($row['CatID']); ?></td>
                <td><?php echo $row['PQuantity']; ?></td>
                <td><?php echo $row['PPrice']; ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $row['ProdID']; ?>"><i class="fa fa-edit"></i></a>&nbsp;
                    <a href="assets/functions/deleteproduct.php?id=<?php echo $row['ProdID']; ?>"><i class="fa fa-trash"></i></a>
                </td>
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