<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row">
        </div>
    </div>
    <div class="container tablediv">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p style="margin-top: 15px;">Customers List</p>
                </div>
                <div>
                    <div>
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><i class="fa fa-archive"></i>&nbsp;ID</th>
                <th><i class="fa fa-archive"></i>&nbsp;Name</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;E-Mail</th>
                <th><i class="fa fa-plus"></i>&nbsp;City</th>
                <th><i class="fa fa-money"></i>&nbsp;Address</th>
                <th><i class="fa fa-tasks"></i>&nbsp;Phone</th>
                <th><i class="fa fa-tasks"></i>&nbsp;Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT `CustID`, `CustFirstName`, `CustLastName`, `CustEmail`, `CustPassword`, `CustAddress`, `CustCity`, `CustPhone` FROM `customer`";
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['CustID']; ?></td>
                <td><?php echo $row['CustFirstName']; ?></td>
                <td><?php echo $row['CustEmail']; ?></td>
                <td><?php echo $row['CustCity']; ?></td>
                <td><?php echo $row['CustAddress']; ?></td>
                <td><?php echo $row['CustPhone']; ?></td>
                <td>
                    <a href="assets/functions/deletecustomer.php?id=<?php echo $row['CustID']; ?>"><i class="fa fa-trash"></i></a>
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