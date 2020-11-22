<?php
     include 'Connect.php';
     $id = $_GET['id'];
     $conn = new Connect();
     $query = $conn->deleteBarang($id);

     header('location:Cart.php?pesan=berhasil');
?>