<?php  
include('../includes/connect.php');
include('../functions/common_function.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
     <!--bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <!--font awesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
        
     </style>

      <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-fluid m-3">
<h2 class="text-center mb-5">Admin Registration</h2>
<div class="row d-flex justify-content-center ">
    <div class="col-lg-6 col-xl-5">
        <img src="../images/registration.jpg" alt="Admin Registration" class="img-fluid">
    </div>
    <div class="col-lg-6 col-xl-5">
        <form action="" method="post">
            <div class="form-outline mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required="required" class="form-control">

            </div>
            <div class="form-outline mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required="required" class="form-control">

            </div>
            <div class="form-outline mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required="required" class="form-control">

            </div>
            <div class="form-outline mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="confirm_password" id="confirm_password" name="confirm_password" placeholder="Enter your confirm password" required="required" class="form-control">

            </div>

            <div>
                <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register">
                <p class="small fw-bold mt-2 pt-1">Do you Already have an account? <a href="admin_login.php" class="link-danger">Login</a></p>
            </div>
        </form>
    </div>
</div>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_register'])){
    $admin_name=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_admin_password=$_POST['conf_admin_password'];
   
    

    //select_query
    $select_query="select * from `admin_table` where name='$admin_name' or admin_email='$admin_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('username and email is already existed')</script>";
    }elseif($admin_password!=$conf_admin_password){
        echo "<script>alert('password do not match')</script>";
    }
    
    else{
        //insert_query
    $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password) values(' $admin_name','$admin_email','$hash_password')";
    $sql_execute=mysqli_query($con,$insert_query);
    }
}
?>