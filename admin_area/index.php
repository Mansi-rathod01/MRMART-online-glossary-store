<!---- connect file ---->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <!--font awesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     

      <link rel="stylesheet" href="../style.css">
      <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
}
.body{
overflow-x: hidden;
}
.product-img{
    width: 100px;
    object-fit: contain;
}
      </style>
</head>
<body>
    <!--navbar -->
    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>
        <!--second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="../images/stawbery.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-danger my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-danger my-1">View products</a></button>
                    <button><a href="index.php?insert_categories" class="nav-link text-light bg-danger my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-danger my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-danger my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-danger my-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-danger my-1">All orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light bg-danger my-1">All payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-danger my-1">List users</a></button>
                    <button><a href="" class="nav-link text-light bg-danger my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!--- forth  child --->
        <class class="container my-3">
            <?php 
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_product'])){
                include('edit_products.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }
            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');
            }
              if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }
            if(isset($_GET['delete_brand'])){
                include('delete_brands.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['delete_orders'])){
                include('delete_orders.php');
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            if(isset($_GET['delete_payments'])){
                include('delete_payments.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            if(isset($_GET['delete_users'])){
                include('delete_users.php');
            }
            ?>
        </class>
        
    </div>
    <?php 
include("../includes/footer.php")
?>
    </div>
<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>