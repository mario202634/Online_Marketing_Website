<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button greydarkbg">
            <div class="container">
                <a class="navbar-brand lightcol" href="dashboard.php">ShopCity</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link lightcol" aria-expanded="false" data-toggle="dropdown" data-bss-hover-animate="pulse" href="#">Categories</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="view_category.php">View Categories</a><a class="dropdown-item" href="add_category.php">Add Category</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link lightcol" data-bss-hover-animate="pulse" href="../admin/view_customers.php">Users</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link lightcol" aria-expanded="false" data-toggle="dropdown" data-bss-hover-animate="pulse" href="#">Products</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="view_products.php">View Products</a><a class="dropdown-item" href="add_product.php">Add Product</a></div>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link lightcol" aria-expanded="false" data-toggle="dropdown" data-bss-hover-animate="pulse" href="#">Admins</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="view_admins.php">View Admins</a><a class="dropdown-item" href="add_admin.php">Add Admin</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-primary action-button" role="button" href="assets/functions/signout.php">Sign out</a></span>
                </div>
            </div>
        </nav>
    </header>