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

          <div class="card" style="width: 20rem;">
               <img class="card-img-top"
                    src="https://www.jalajahnusae.com/wp-content/uploads/2019/08/teraskita-hotel.jpg">
               <div class="card-body">
                    <h4 class="card-title text-center">Standard <br><span class="text-danger">$ 90/Day</span></h4>
                    <p class="card-text">
                         <table class="table table-striped text-center">
                              <tr>
                                   <th>Facilites</th>
                              </tr>
                              <tr>
                                   <td>1 Single Bed</td>
                              </tr>
                              <tr>
                                   <td>1 Bathroom</td>
                              </tr>
                         </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-danger"
                         href="booking.php?room=Standard&picture=https://www.jalajahnusae.com/wp-content/uploads/2019/08/teraskita-hotel.jpg">Book
                         now</a>
               </div>
          </div>

          <div class="card mx-4" style="width: 20rem;">
               <img class="card-img-top"
                    src="https://avenzelhotel.com/wp-content/uploads/2016/03/suite-bedroom-king.jpg">
               <div class="card-body">
                    <h4 class="card-title text-center">Superior<br><span class="text-danger">$ 150/Day</span></h4>
                    <p class="card-text">
                         <table class="table table-striped text-center">
                              <tr>
                                   <th>Facilites</th>
                              </tr>
                              <tr>
                                   <td>1 Double Bed</td>
                              </tr>
                              <tr>
                                   <td>1 television and Wi-Fi</td>
                              </tr>
                              <tr>
                                   <td>1 Bathroom</td>
                              </tr>
                         </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-danger"
                         href="booking.php?room=Superior&picture=https://avenzelhotel.com/wp-content/uploads/2016/03/suite-bedroom-king.jpg">Book
                         now</a>
               </div>
          </div>

          <div class="card" style="width: 20rem;">
               <img class="card-img-top"
                    src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/cd2515e1ba09506196b36afa004d449f.jpg">
               <div class="card-body">
                    <h4 class="card-title text-center">Luxury<br><span class="text-danger">$ 200/Day</span></h4>
                    <p class="card-text">
                         <table class="table table-striped text-center">
                              <tr>
                                   <th>Facilites</th>
                              </tr>
                              <tr>
                                   <td>1 Double Bed</td>
                              </tr>
                              <tr>
                                   <td>1 Kitchen</td>
                              </tr>
                              <tr>
                                   <td>1 Bathroom</td>
                              </tr>
                              <tr>
                                   <td>1 workroom</td>
                              </tr>
                         </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-danger"
                         href="booking.php?room=Luxury&picture=https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/cd2515e1ba09506196b36afa004d449f.jpg">Book
                         now</a>
               </div>
          </div>
     </div>

</body>

</html>