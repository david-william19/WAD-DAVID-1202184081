<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
     <script src="https://use.fontawesome.com/af861b7cac.js"></script>
     <title>Cart</title>
     <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:Login.php');
    }

    include 'Connect.php';
    $conn = new Connect();
    $id = $_SESSION['id'];
    $detail = $conn->showProfile($id);
    ?>

<style>
        .background {
            background-color: <?= $_COOKIE['background'] ?>
        }
    </style>
</head>

<body>
     <!-- Navigasi -->
     <nav class="navbar navbar-expand-lg navbar-light background">
          <a class="navbar-brand" href="Index.php">WAD Beauty</a>
          <div class="collapse navbar-collapse nav nav-pills">
               <span class="navbar-text ml-auto">
                    <a class="fa fa-shopping-cart text-dark" href="Cart.php" style="text-decoration:none"></a>
                    Selamat datang, </span>
               <li class="nav-item dropdown mr-5 ml-2">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$_SESSION['nama']?></a>
                    <div class="dropdown-menu">
                         <a class="dropdown-item" href="Profile.php">Profile</a>
                         <a class="dropdown-item" href="Logout.php">Logout</a>
                    </div>
               </li>
          </div>
     </nav>

     <?php
          if(isset($_GET['pesan'])){
               echo '<div class="alert alert-success" role="alert">update berhasil</div>';
          }
     ?>

     <div class="container mt-5 p-3 bg-white rounded shadow">
          <h1 class="text-center mb-4">Profile</h1>
          <div class="row">
               <div class="col">
                    <form action="updateProfile.php" method="POST">
                         <?php foreach ($detail as $sh) { ?>
                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                   <input type="email" readonly class="form-control-plaintext" value="<?=$sh['email']?>"
                                        name="email">
                              </div>
                         </div>
                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" placeholder="name" value="<?=$sh['nama']?>"
                                        name="nama">
                              </div>
                         </div>
                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">No.handphone</label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" placeholder="no.handphone"
                                        value="<?=$sh['no_hp']?>" name="no_hp">
                              </div>
                         </div>
                         <hr class="my-4">
                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                   <input type="password" class="form-control" placeholder="password" name="password">
                              </div>
                         </div>
                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">Password address</label>
                              <div class="col-sm-10">
                                   <input type="password" class="form-control" placeholder="Confirm password"
                                        name="confirmPass">
                              </div>
                         </div>

                         <div class="form-group row mx-auto">
                              <label class="col-sm-2 col-form-label">Navbar color</label>
                              <div class="col-sm-10">

                                   <select class="form-control col-sm-2" name="background_color">
                                        <option value="#f8f9fa">Light</option>
                                        <option value="#525252">Dark</option>
                                   </select>
                              </div>
                         </div>

                         <button type="submit" class="btn btn-block bg-primary" name="submit">Submit</button>
                         <button type="reset" class="btn btn-block bg-light">Cancel</button>
                         <?php }?>
                    </form>
               </div>

          </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
</body>

</html>