<?php
     session_start();
     include_once 'Connect.php';
     $conn = new Connect();

     if(isset($_SESSION['is_login'])){
          header('location:Index.php');
     }
 
     if(isset($_COOKIE['email'])){
          $conn->relogin($_COOKIE['email']);
          header('location:Index.php');
     }
 
     if(isset($_POST['login'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
          if(isset($_POST['remember'])){
               $remember = TRUE;
          }
          else
          {
               $remember = FALSE;
          }
 
          if($conn->login($email,$password,$remember))
          {
          header('location:Index.php?pesan=berhasil');
          }
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
     <title>Login</title>
</head>

<body>
     <!-- Navigasi -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">WAD Beauty</a>
          <div class="collapse navbar-collapse">
               <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="Login.php">Login</a>
                    <a class="nav-item nav-link active" href="Register.php">Register</a>
               </div>
          </div>
     </nav>

     <?php
      if(isset($_GET['logout'])){
        echo '<div class="alert alert-success" role="alert">Logout berhasil</div>';
      }
    ?>

     <!-- container register -->
     <div class="container py-4">
          <div class="shadow card mx-auto" style="width: 30rem;">
               <div class="card-body px-5">
                    <h3 class="text-center">Login</h3>
                    <hr />
                    <!-- Form registrasi -->
                    <form action="" method="post">
                         <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control w-75" placeholder="email anda..." name="email" />
                         </div>
                         <div class="form-group mb-1">
                              <label>Kata Sandi</label>
                              <input type="password" class="form-control w-75" placeholder="kata sandi anda..."
                                   name="password" />
                         </div>
                         <div class="form-check mb-4">
                              <input type="checkbox" class="form-check-input" name="remember" value="remember-me">
                              <label class="form-check-label">Remember me</label>
                         </div>
                         <div class="d-flex align-items-center flex-column">
                              <button type="submit" class="btn btn-primary w-25" name="login">Daftar</button>
                              <p>sudah punya akun? <a href="Login.php">Login</a></p>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</body>

</html>