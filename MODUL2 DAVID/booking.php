<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script>
          function setPicture() {
               var banner = document.getElementById("tipe");
               var value = banner.options[banner.selectedIndex].value;
               $('img').attr("src", value);
          }
     </script>
     <title>Home</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-danger">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.php ">Home</a>
                    <a class="nav-item nav-link active" href="booking.php">Booking</a>
               </div>
          </div>
     </nav>

     <div class="container d-flex justify-content-center p-4">
          <div class="row">
               <div class="col-sm-6 mr-3">
                    <form action="myBooking.php" method="POST">
                         <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" placeholder="nama lengkap" name="nama">
                         </div>

                         <div class="form-group">
                              <label for="nama">Check-in</label>
                              <input type="date" class="form-control" name="checkin">
                         </div>

                         <div class="form-group">
                              <label for="nama">Duration</label>
                              <input type="number" class="form-control" name="duration">
                              <p class="text-muted">Day(s)</p>
                         </div>

                         <div class="form-group">
                              <label for="room">Room Type</label>
                              <?php if(empty($_GET['room'])): ?>
                              <select class="form-control" name="room" id="tipe" onchange="setPicture()">
                                   <option
                                        value="https://www.jalajahnusae.com/wp-content/uploads/2019/08/teraskita-hotel.jpg">
                                        Standard</option>
                                   <option
                                        value="https://avenzelhotel.com/wp-content/uploads/2016/03/suite-bedroom-king.jpg">
                                        Superior</option>
                                   <option
                                        value="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/cd2515e1ba09506196b36afa004d449f.jpg">
                                        Luxury</option>
                              </select>

                              <?php else: ?>
                                   <input type="text" class="form-control" value=<?= $_GET['room'] ?> name="room" src readonly>
                              <?php endif; ?>
                         </div>

                         <p class="mb-2">Add Service(s)</p>
                         <p class="mb-0"><small>$20 /days</small></p>
                         <div class="form-group">
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="service[]" value="Room service">
                                   <label class="form-check-label" for="room">
                                        Room Service
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="service[]" value="breakfast">
                                   <label class="form-check-label" for="breakfast">
                                        Breakfast
                                   </label>
                              </div>
                         </div>

                         <div class="form-group">
                              <label for="nomorhp">Phone Number</label>
                              <input type="text" class="form-control" name="nomor">
                         </div>
                         <button class="btn btn-block btn-danger" type="submit" value="kirim">Book</button>
                    </form>
               </div>
               <div class="col-sm-4">
               <?php if(!empty($_GET['picture'])){ ?>
                    <img src=<?= $_GET['picture']?> style="width:500px;">
               <?php }else {?>
                    <img src='https://www.jalajahnusae.com/wp-content/uploads/2019/08/teraskita-hotel.jpg' style="width:500px;">
               <?php }?>
               </div>
          </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>