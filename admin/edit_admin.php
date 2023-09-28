<?php
session_start();
include('assets/header.php');
include('../inc/config.php');
include('../inc/functions.php');

if(!authAdmin()) die('<META HTTP-EQUIV="refresh" content="0;URL=index.php">');

$id=cleanui($_GET['id']);
$query="SELECT * FROM `admin` WHERE `AdminID`=$id";
$result=mysqli_query($con, $query);
$rowdata=mysqli_fetch_array($result);
?>
<title>Edit Admin</title>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-center infoboxdiv">
        <div class="row"></div>
    </div>
    <div class="container tablediv">
        <div class="row" style="color: rgb(255,255,255);">
            <div class="col-md-6" style="background: #ffffff;border-radius: 25px;">
                <p style="margin-top: 15px;color: black;">Edit Admin</p>
                <form action="assets/functions/editadmin.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
                <div>
                        <div data-bss-hover-animate="pulse" class="inputdiv"><input type="text" placeholder="Admin First Name" name="fname" value="<?php echo $rowdata['FirstName'] ?>" required></div>
                     <div data-bss-hover-animate="pulse" class="inputdiv"><input type="text" placeholder="Admin Last Name" name="lname" value="<?php echo $rowdata['LastName'] ?>" required></div>
                       
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <input type="email" placeholder="E-mail" name="email" value="<?php echo $rowdata['Email']; ?>" required>
                        </div>
                        <div data-bss-hover-animate="pulse" class="inputdiv">
                            <input type="password" placeholder="New Password" name="pwd" value="" >
                        </div>
                        
                    
                </div>
                <div></div><button class="logbutt btn btn-primary" data-bss-hover-animate="pulse" type="submit">Submit</button><div><br></div>
                </form>
            </div>
        </div>
    </div>
<?php include('assets/footer.php'); ?>