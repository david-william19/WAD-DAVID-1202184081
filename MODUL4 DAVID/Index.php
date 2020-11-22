     <?php
     session_start();
     if (!isset($_SESSION['is_login'])) {
         header('location:Login.php');
     }

     if(isset($_GET['barang'])){
          include 'Connect.php';
          $barang=$_GET['barang'];
          if($barang=="YUJA"){
               $harga=120000;
          }
          elseif($barang=="SNAIL"){
               $harga=180000;
          }
          elseif($barang=="MIRACLE"){
               $harga=160000;
          }
          else{
               header("location:Index.php");
          }
          $conn = new Connect();
          $query = $conn->addBarang($_SESSION['id'], $barang, $harga);
     }
     ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
               integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
               crossorigin="anonymous" />
               <script src="https://use.fontawesome.com/af861b7cac.js"></script>
          <title>Index</title>
          <style>
        .background {
            background-color: <?= $_COOKIE['background'] ?>
        }
    </style>
     </head>

     <body>
          <!-- Navigasi -->
          <nav class="navbar navbar-expand-lg navbar-light background">
               <a class="navbar-brand" href="#">WAD Beauty</a>
               <div class="collapse navbar-collapse nav nav-pills">
                    <span class="navbar-text ml-auto">
                    <a class="fa fa-shopping-cart text-dark" href="Cart.php" style="text-decoration:none"></a>
                    Selamat datang, </span>
                    <li class="nav-item dropdown mr-5 ml-2">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$_SESSION['nama'];?></a>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="Profile.php">Profile</a>
                              <a class="dropdown-item" href="Logout.php">Logout</a>
                         </div>
                    </li>
               </div>
          </nav>

          <!-- alert ketika berhasil -->
          <?php
          if(isset($_GET['pesan'])){
               echo '<div class="alert alert-success" role="alert">Login berhasil</div>';
          }
          elseif(isset($_GET['barang'])){
               echo '<div class="alert alert-success" role="alert">Barang Berhasil Ditambahkan</div>';
          }
          ?>

          <!-- Bagian container barang -->
          <div class="container my-3">
               <div class="row bg-danger p-3">
                    <div class="col">
                         <h2 class="text-light text-center">WAD BEAUTY</h2>
                         <p class="text-center text-light">Tersedia skin care dengan harga murah tapi bukan murahan dan
                              berkualitas</p>
                    </div>
               </div>

               <div class="row">
                    <div class="col-4 p-0">
                         <div class="card">
                              <img class="card-img-top"
                                   src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/5/28/003b2101-e45c-498e-b2ed-c5e2396388c0.jpg"
                                   alt="Card image cap">
                              <div class="card-body">
                                   <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                                   <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                        itaque, fugiat exercitationem eveniet, ea, distinctio placeat voluptates debitis
                                        nam culpa minima cumque necessitatibus omnis minus quisquam officia a tenetur
                                        optio earum maiores tempore? Quidem voluptatum neque itaque. Obcaecati non hic
                                        voluptatem.</p>
                                   <hr>
                                   <p>Rp.120.000</p>
                                   <a href="Index.php?barang=YUJA" class="btn btn-primary btn-block">Tambah Ke Keranjang</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-4 p-0">
                         <div class="card">
                              <img class="card-img-top"
                                   src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//98/MTA-5770195/somebymi_somebymi_snail_truecica_miracle_repair_starter_kit_full03_ctk85spu.jpg"
                                   alt="Card image cap">
                              <div class="card-body">
                                   <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                                   <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                        itaque, fugiat exercitationem eveniet, ea, distinctio placeat voluptates debitis
                                        nam culpa minima cumque necessitatibus omnis minus quisquam officia a tenetur
                                        optio earum maiores tempore? Quidem voluptatum neque itaque. Obcaecati non hic
                                        voluptatem.</p>
                                   <hr>
                                   <p>Rp.180.000</p>
                                   <a href="Index.php?barang=SNAIL" class="btn btn-primary btn-block">Tambah Ke Keranjang</a>
                              </div>
                         </div>
                    </div>
                    <div class="col p-0">
                         <div class="card">
                              <img class="card-img-top"
                                   src="https://d32156vu2hnk85.cloudfront.net/wp-content/uploads/2020/01/12204833/some_by_mi_aha_bha_pha_miracle_toner_2.jpg"
                                   alt="Card image cap">
                              <div class="card-body">
                                   <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                                   <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                        itaque, fugiat exercitationem eveniet, ea, distinctio placeat voluptates debitis
                                        nam culpa minima cumque necessitatibus omnis minus quisquam officia a tenetur
                                        optio earum maiores tempore? Quidem voluptatum neque itaque. Obcaecati non hic
                                        voluptatem, qui cum minima officia debitis expedita? Possimus, blanditiis
                                        impedit.</p>
                                   <hr>
                                   <p>Rp.160.000</p>
                                   <a href="Index.php?barang=MIRACLE" class="btn btn-primary btn-block">Tambah Ke Keranjang</a>
                              </div>
                         </div>
                    </div>
               </div>
               <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous">
               </script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous">
               </script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous">
               </script>
     </body>
     </html>