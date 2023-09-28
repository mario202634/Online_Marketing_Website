<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');
?>
<title>Add Admin</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row"></div>
    </div>
    <div class="container tablediv">
        <div class="row" style="color: rgb(255,255,255);">
            <div class="col-md-6" style="background: #ffffff;border-radius: 25px;">
                <p style="margin-top: 15px;color: black;">Add Admin</p>
                <div>
            <form action="assets/functions/addadmin.php" enctype="multipart/form-data" method="post">
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="text" placeholder="First Name" name="fname" required></div>
                        
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="text" placeholder="Last Name" name="lname" required></div>
                        
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="email" placeholder="E-Mail" name="email" required></div>
                        
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="password" placeholder="Password" name="pwd" required>

                </div>
                <div></div><button class="logbutt btn btn-primary" data-bss-hover-animate="pulse" type="submit">Submit</button><div><br></div>
                </form>
            </div>
        </div>
    </div>
<?php include('assets/footer.php'); ?>