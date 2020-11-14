<?php
     include 'connect.php';

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

     if(!in_array($pathInfo, $ekstensi)){
          header('location:home.php?alert=gagal_ekstensi');
     }else{

          $path = $random.'_'.$namaGambar;
     move_uploaded_file($_FILES['gambar']['tmp_name'], 'asset/'.$random.'_'.$namaGambar);

     $postEvent = mysqli_query($connect, "INSERT INTO event_table VALUES ('', '$nama', '$deskripsi', '$path', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')");

     header("location:home.php");
       } 
?>