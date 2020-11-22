<?php
     session_start();
    
     if (!isset($_SESSION['is_login'])) {
         header('location:Login.php');
     }
     
?>
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
	$background_color = '#f8f9fa';
	
	if ($_POST) {
		$background_color = $_POST['background_color'];
	} else {
		if (isset($_COOKIE['background-color'])) {
			 $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
		}
     }
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
          echo '<div class="alert alert-warning" role="alert">Barang berhasil dihapus</div>';
     }
     ?>

     <!-- Bagian cart barang -->
     <div class="container py-4">
          <table class="table table-striped my-4">
               <thead>
                    <tr>
                         <th>No</th>
                         <th>Nama Barang</th>
                         <th>Harga</th>
                         <th>Aksi</th>
                    </tr>
               </thead>
               <tbody>
                    <?php 
                include 'Connect.php';
                $conn = new Connect();
               $query=$conn->showBarang($_SESSION['id']);
               $i=0;
               $total=0;

               function convertRupiah($harga){
                    $rupiah="Rp.".number_format($harga, 0, ',', '.');
                    return $rupiah;
               }
               while($data=mysqli_fetch_array($query)){
                    $i++;
                    if ($_SESSION['id'] == $data['user_id']) {
                         $total+=$data['harga'];
                    ?>
                    <tr>
                         <td><?=$i?></td>
                         <td><?=$data['nama_barang']?></td>
                         <td><?=convertRupiah($data['harga'])?></td>
                         <td><a class="btn btn-danger" href="deleteEvent.php?id=<?=$data['id']?>">Hapus</a></td>
                    </tr>
                    <?php }?>
                    <?php }?>
               </tbody>
               <tfoot class="bg-light">
                    <tr>
                         <th colspan="2">Total</td>
                         <th colspan="2"><?= convertRupiah($total)?></td>
                    </tr>
               </tfoot>
          </table>
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