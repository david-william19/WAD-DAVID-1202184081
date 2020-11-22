<?php
     include 'connect.php';

     $id = $_GET['id'];
     $nama = $_POST['name'];
     $deskripsi = $_POST['deskripsi'];
     $kategori = $_POST['kategori'];
     $tanggal= $_POST['tanggal'];
     $mulai = $_POST['mulai'];
     $berakhir = $_POST['berakhir'];
     $tempat = $_POST['tempat'];
     $harga = $_POST['harga'];
     $benefit = implode(",",$_POST['benefit']);

     $random = rand();
     $ekstensi =  array('png','jpg','jpeg','gif');
     $namaGambar = $_FILES['gambar']['name'];
     $sizeGambar = $_FILES['gambar']['size'];
     $pathInfo = pathinfo($namaGambar, PATHINFO_EXTENSION);
     $id = $_GET['id'];

     if(!in_array($pathInfo, $ekstensi)){
          header('location:home.php?alert=gagal_ekstensi');
     }else{

          $path = $random.'_'.$namaGambar;
     move_uploaded_file($_FILES['gambar']['tmp_name'], 'asset/'.$random.'_'.$namaGambar);

     $postEvent = mysqli_query($connect, "UPDATE event_table SET name='$nama', deskripsi='$deskripsi', gambar='$path', kategori='$kategori', tanggal='$tanggal', mulai='$mulai', berakhir='$berakhir', tempat='$tempat', harga='$harga', benefit='$benefit' WHERE id='$id'");

     header("location:home.php");
       } 
?>