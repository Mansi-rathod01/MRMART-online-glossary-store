<!---- connect file ---->
<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD MART- ONLINE GLOSSARY STORE</title>
    <!--- BOOTSTRAP CSS LINK --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!---- FONT AWESOME LINK ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---- css file LINK ---->
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <!---- NAV BAR ---->
    <div class="container-fluid p-0">
        <!---- FIRST CHILD ---->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!--- second child --->
<nav class="navbar navbar-expand lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
 
        <?php
        if(!isset( $_SESSION['username'])){
          echo" <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
          }else{
            echo"  <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
          </li>";
          }
          if(!isset( $_SESSION['username'])){
          echo"  <li class='nav-item'>
            <a class='nav-link' href='./users_area/user_login.php'>login</a>
          </li>";
          }else{
            echo"  <li class='nav-item'>
            <a class='nav-link' href='./users_area/logout.php'>Logout</a>
          </li>";
          }
        ?>
  </ul>
</nav>

<!--- third child --->
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>

<!--- fouth child --->
<div class="row px-3">
  <div class="col-md-10 mb-2">
    <!--- products --->
    <div class="row">

       <!-- fetching products -->
    <?php
 get_all_products(); 
get_unique_categories();
get_unique_brands();
    ?>

    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-danger">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php
           getcategories();
      ?>
    </ul>
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-danger">
        <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
      </li>
      <?php
     getbrands();
      ?>
    </ul>

    <!--- sidenav --->
    <!--- categories --->
    
</div>

<!--- last child --->
 <div class="bg-danger p-3 text-center">
  <p>All rights reserved  Designed by mansi-2025</p>
</div>
    </div> -->



<!--- BOTSTRAP JS LINK --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>