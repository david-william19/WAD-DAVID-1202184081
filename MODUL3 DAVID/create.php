<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <title>Document</title>

     <style>
     .card{
          height:65vh;
     }

     textarea{
          resize:none;
     }
     </style>
</head>

<body>
     <div class="navbar navbar-expand navbar-light bg-primary d-flex justify-content-between">
          <div>
               <h3 class="navbar-brand text-light" href="#">EAD EVENTS</h3>
          </div>


          <div class="navbar">
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link text-light" href="home.php">Home</a>
                    </li>
               </ul>
               <a class="btn btn-outline-light" href="create.php">Buat Event</a>
          </div>
     </div>

     <div class="container mt-3">
          <h3 class="text-primary py-2">Buat Event</h3>
          <form action="createEvent.php" method="post" enctype="multipart/form-data">
               <div class="row">
                    <div class="col px-3">
                         <div class="card pb-5">
                              <div class="card-header bg-danger"></div>
                              <div class="card-body">

                                   <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="name" name="name">
                                   </div>
                                   <div class="form-group my-2">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" rows="3" cols="30" name="deskripsi"></textarea>
                                   </div>

                                   <label>Upload Gambar</label>
                                   <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar">
                                        <label class="custom-file-label">Choose file</label>
                                   </div>

                                   <div class="form-group mb-1">
                                        <label>Kategori</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori"
                                             value="online">
                                        <label class="form-check-label">Online</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori"
                                             id="inlineRadio2" value="offline">
                                        <label class="form-check-label" for="inlineRadio2">Offline</label>
                                   </div>



                              </div>
                         </div>
                    </div>
                    <div class="col px-3">
                         <div class="card">
                              <div class="card-header bg-primary"></div>
                              <div class="card-body">
                                   <div class="form-group mb-2">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal">
                                   </div>
                                   <div class="form-row">

                                        <div class="form-group col-md-6 my-1">
                                             <label>Jam Mulai</label>
                                             <select class="form-control" name="mulai">
                                                  <option>10:00</option>
                                                  <option>11:00</option>
                                                  <option>12:00</option>
                                             </select>
                                        </div>

                                        <div class="form-group col-md-6 my-1" >
                                             <label>Jam Berakhir</label>
                                             <select class="form-control" name="berakhir">
                                                  <option>13:00</option>
                                                  <option>14:00</option>
                                                  <option>15:00</option>
                                             </select>
                                        </div>
                                   </div>

                                   <div class="form-group my-1">
                                        <label>Tempat</label>
                                        <input type="text" class="form-control" placeholder="name" name="tempat">
                                   </div>
                                   <div class="form-group my-1">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" placeholder="name" name="harga">
                                   </div>

                                   <div class="form-group my-1">
                                        <label>Benefit</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]"
                                             value="snacks">
                                        <label class="form-check-label" >Snacks</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]"
                                             value="sertifikat">
                                        <label class="form-check-label" >Sertifikat</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="benefit[]"
                                             id="inlineRadio2" value="souvenir">
                                        <label class="form-check-label" >Souvenir</label>
                                   </div>

                                   <div class="form-group d-flex justify-content-end my-1">
                                        <button type="submit" class="btn btn-primary mx-3">Submit</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </form>
     </div>

</body>

</html>