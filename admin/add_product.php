<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
<title>Add Product</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row"></div>
    </div>
    <div class="container tablediv">
        <div class="row" style="color: rgb(255,255,255);">
            <div class="col-md-6" style="background: #ffffff;border-radius: 25px;">
                <p style="margin-top: 15px;color: black;">Add Product</p>
                <form action="assets/functions/addproduct.php" enctype="multipart/form-data" method="post">
                <div>
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="text" placeholder="Name" name="pname" required></div>
                        <div style="background: #ffffff;border-radius: 25px;margin-top: 10px;width: 540px;">
                    <select class="form-control inputdiv" name="catid">
                        <option selected disabled>Select Category</option>
                        <?php
                        $query="select * from categories";
                        $result=mysqli_query($con, $query);
                        while($row=mysqli_fetch_array($result))
                        {
                        ?>
                            <option value="<?php echo $row['CategoryID']; ?>"><?php echo $row['CategoryName']; ?></option>
                        <?php
                        }
                        mysqli_free_result($result);
                        ?>
                    </select>
                        </div>
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <textarea class="form-control-lg" style="background: rgba(255,255,255,0);border-style: none;color: rgb(152,152,152);width: 514px;height: 80px;" name="pdescription" placeholder="Description" required></textarea>
                        </div>
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <input type="number" placeholder="Quantity" name="pquantity" required>
                        </div>
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <input type="number" placeholder="Price" name="pprice" required>
                        </div>
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <span class="form-text text-muted" style="margin: 4px 0px 0px;margin-bottom: 5px;">Image</span>
                            <input type="file" name="pimage">
                        </div>
                </div>
                <div></div><button class="logbutt btn btn-primary" data-bss-hover-animate="pulse" type="submit">Submit</button><div><br></div>
                </form>
            </div>
        </div>
    </div>
<?php include('assets/footer.php'); ?>