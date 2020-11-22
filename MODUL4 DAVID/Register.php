<?php
     include_once 'Connect.php';

     if($_POST){
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $no_hp = $_POST['noHp'];
     $pass = $_POST['password'];
     $confirmPass = $_POST['confirmPassword'];
     $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
     $conn = new Connect();
     if ($conn->register($nama, $email, $no_hp, $pass, $confirmPass)) {   
      header('location:Register.php?pesan=berhasil');
   }
     }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <title>Register</title>
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

    <!-- alert ketika berhasil -->
    <?php
      if(isset($_GET['pesan'])){
        echo '<div class="alert alert-success" role="alert">Registrasi berhasil</div>';
      }
    ?>

    <!-- container register -->
    <div class="container py-4">
      <div class="shadow card mx-auto" style="width: 30rem">
        <div class="card-body px-5">
          <h3 class="text-center">Registrasi</h3>
          <hr />
          <!-- Form registrasi -->
          <form action="" method="post">
            <div class="form-group">
              <label>Name</label>
              <input
                type="text"
                class="form-control w-75"
                placeholder="nama anda..."
                name="nama"
              />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input
                type="email"
                class="form-control w-75"
                placeholder="email anda..."
                name="email"
              />
            </div>
            <div class="form-group">
              <label>No. Handphone</label>
              <input
                type="text"
                class="form-control w-75"
                placeholder="no.handphone anda..."
                name="noHp"
              />
            </div>
            <div class="form-group">
              <label>Kata Sandi</label>
              <input
                type="password"
                class="form-control w-75"
                placeholder="kata sandi anda..."
                name="password"
              />
            </div>
            <div class="form-group">
              <label>Konfirmasi Kata Sandi</label>
              <input
                type="password"
                class="form-control w-75"
                placeholder="konfirmasi kata sandi..."
                name="confirmPassword"
              />
            </div>
            <div class="d-flex align-items-center flex-column">
              <button type="submit" class="btn btn-primary w-25">Daftar</button>
              <p>sudah punya akun? <a href="Login.php">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
