<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
<title>View Admins</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row">
        </div>
    </div>
    <div class="container tablediv">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p style="margin-top: 15px;">Admins List</p>
                </div>
                <div>
                    <div>
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><i class="fa fa-archive"></i>&nbsp;ID</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;First Name</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;Last Name</th>
                <th><i class="fa fa-plus"></i>&nbsp;E-mail</th>
              
                
                <th><i class="fa fa-tasks"></i>&nbsp;Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT `AdminID`, `FirstName`, `LastName`, `Email`, `Password` FROM `admin`";
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['AdminID']; ?></td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
              
                <td><?php echo $row['Email']; ?></td>
                 
                
                <td>
                    <a href="#"><i class="fa fa-eye"></i></a>&nbsp;
                    <a href="edit_admin.php?id=<?php echo $row['AdminID']; ?>"><i class="fa fa-edit"></i></a>&nbsp;
                    <a href="assets/functions/deleteadmin.php?id=<?php echo $row['AdminID']; ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                <!--<option value="<?php echo $row['AdminID']; ?>"><?php echo $row['FirstName']; ?></option>-->
            <?php
            }
            mysqli_free_result($result);
            ?>

        </tbody>
        <!--<tfoot>
            <tr>
                <th><i class="fa fa-archive"></i>&nbsp;Item</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;Category</th>
                <th><i class="fa fa-plus"></i>&nbsp;Quantity</th>
                <th><i class="fa fa-money"></i>&nbsp;Price</th>
                <th>&nbsp;Actions</th>
            </tr>
        </tfoot>-->
    </table>
                        <!--<table id="table1" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-archive"></i>&nbsp;Item</th>
                                    <th><i class="fa fa-list-alt"></i>&nbsp;Category</th>
                                    <th><i class="fa fa-plus"></i>&nbsp;Quantity</th>
                                    <th><i class="fa fa-money"></i>&nbsp;Price</th>
                                    <th>&nbsp;Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>

                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                    <td>Cell 3</td>
                                </tr>
                            </tbody>
                        </table>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('assets/footer.php'); ?>