<?php
     include 'Connect.php';
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $phone = $_POST['no_hp'];
     $background_color = "#f8f9fa";
     $background_color = $_POST['background_color'];
     $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
     setcookie('background', $background_color, $background_color);
     $conn = new Connect();
     $query = $conn->updateProfile($nama, $email, $phone, $pass);
     header('location:Profile.php?pesan=berhasil');
?>
