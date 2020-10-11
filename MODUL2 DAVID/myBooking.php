<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Home</title>
</head>

<body>
     <?php
     error_reporting(error_reporting() & ~E_NOTICE);
          $idNumber = rand(2340, 3000);
          $name = $_POST['nama'];
          $checkIn = $_POST['checkin'];
          $duration = $_POST['duration'];
          $checkOut = $checkIn." + ".$duration." days";
          $room = $_POST['room'];
          $phone = $_POST['nomor'];

          if($room == "https://www.jalajahnusae.com/wp-content/uploads/2019/08/teraskita-hotel.jpg"):
               $room = 'Standard';
          elseif ($room == "https://avenzelhotel.com/wp-content/uploads/2016/03/suite-bedroom-king.jpg"):
               $room = 'Superior';
               $harga = 150;
          elseif ($room == "https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/cd2515e1ba09506196b36afa004d449f.jpg"):
               $room = 'Luxury';
               $harga = 200;
          endif;
          
          if($room == 'Standard'):
               $harga = '90' * $duration;
          elseif($room == 'Superior'):
               $harga = '150' * $duration;
          elseif($room == 'Luxury'):
               $harga = '200' * $duration;
          endif;
     ?>

     <nav class="navbar navbar-expand-lg navbar-light bg-danger">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="home.php">Home</a>
                    <a class="nav-item nav-link" href="booking.php">Booking</a>
               </div>
          </div>
     </nav>

     <div class="title mt-2 text-center">
          <h2 class="text-danger">EAD HOTEL</h2>
          <p class="text-danger">Welcome to 5 Star Hotel</p>
     </div>

     <div class="container d-flex justify-content-center p-2">
          <table class="table table-striped">
               <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-in</th>
                    <th>check-out</th>
                    <th>Room Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
               </tr>
               <tr>
                    <td><?= $idNumber?></td>
                    <td><?= $name?></td>
                    <td><?= date('d-m-Y', strtotime($checkIn))?></td>
                    <td><?= date('d-m-Y', strtotime($checkOut))?></td>
                    <td><?= $room;?></td>
                    <td><?= $phone?></td>
                    <td>
                         <?php if(!empty($_POST['service'])) {
           
                              foreach($_POST['service'] as $serv){
                                  echo $serv.'<br/>';
                              }
                              }elseif(empty($_POST['service'])) {
                                   echo 'no service';}?>


                    </td>
                    <td>
                    <?php if(!empty($_POST['service'])){
                         echo $hargaTotal = $duration*$harga+($duration*(count($_POST['service'])*20));
                    } else {
                         echo $harga;
                    }?>
                    </td>
               </tr>
          </table>
     </div>
</body>

</html>