<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
<title>View Categories</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row">
        </div>
    </div>
    <div class="container tablediv">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p style="margin-top: 15px;">Category List</p>
                </div>
                <div>
                    <div>
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
               <th><i class="fa fa-list"></i>&nbsp;ID</th>
                <th><i class="fa fa-list-alt"></i>&nbsp;Name</th>
                    </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT `CategoryID`, `CategoryName` FROM `categories`";
            $result=mysqli_query($con, $query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['CategoryID']; ?></td>
              
                <td><?php echo $row['CategoryName']; ?></td>

            </tr>
                <!--<option value="<?php echo $row['CategoryID']; ?>"><?php echo $row['CategoryName']; ?></option>-->
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