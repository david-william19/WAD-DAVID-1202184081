<?php
     include 'connect.php';

     $id = $_GET['id'];

     $query = "DELETE FROM event_table WHERE id='$id'";

     $deleteQuery = mysqli_query($connect, $query);

     header('location:home.php');
?>