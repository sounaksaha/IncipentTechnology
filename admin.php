<?php
  session_start();
?>

<?php
    include 'api.php';
    if(isset($_POST['submit'])){
    $userid=$_POST['userName'];
    $password=$_POST['password'];
    
    if($userid=='rushi@gmail.com' && $password=='12345678')
    {
               echo "<script> alert('Login Successful');
                               window.location='dashboard.html';
                     </script>";
                    
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://img.freepik.com/premium-photo/green-tree-white_110893-1398.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Admin
        </div>
        <form method="post"  class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" class="form-control" name="userName" id="userName" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
       
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>