<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <title>detail</title>
     <style>
          .modal-content .modal-body .card {
               height: 50vh;
          }
     </style>
</head>

<body>
     <?php
     include 'connect.php';
          $id = $_GET['id'];
          $query = "SELECT * FROM event_table WHERE id = '$id'";

          $detail = mysqli_query($connect, $query);
     ?>
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

     <div class="container p-3" style="width:50rem">
          <h3 class="text-center text-primary">Detail Event</h3>
          <div class="card shadow">
               <?php foreach($detail as $data) {?>
               <img src="asset/<?php echo $data['gambar']?>" alt="gambar" class="card-img-top">
               <div class="card-body">
                    <h4 class="card-title"><?= $data['name']?></h4>
                    <b>Deskripsi</b>
                    <p class="card-text"><?= $data['deskripsi']?></p>
                    <div class="row">
                         <div class="col">
                              <b>Informasi Event</b>
                              <p class="card-text"><?= $data['tanggal']?></p>
                              <p class="card-text"><?= $data['tempat']?></p>
                              <p class="card-text"><?= $data['mulai']?>-<?= $data['berakhir']?></p>

                              <p class="card-text">
                                   <b>Kategori:</b>
                                   <?= $data['kategori']?>
                              </p>
                              <p class="card-text">
                                   <b>HTM:</b>
                                   <?= $data['harga']?>
                              </p>
                         </div>
                         <div class="col">
                              <b>Benefit</b>
                              <ul>
                                   <li>
                                        <p class="card-text"><?= $data['benefit']?></p>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="card-footer text-center">
                    <!-- modal untuk edit data -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                         style="width:8rem;">Edit</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-xl" role="document">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>
                                   <div class="modal-body">
                                        <form action="detailEvent.php?id=<?=$data['id']?>" method="post" enctype="multipart/form-data">
                                             <div class="row">
                                                  <div class="col px-3">
                                                       <div class="card pb-5">
                                                            <div class="card-header bg-danger"></div>
                                                            <div class="card-body">

                                                                 <div class="form-group">
                                                                      <label>Name</label>
                                                                      <input type="text" class="form-control"
                                                                           value="<?= $data['name']?>" name="name">
                                                                 </div>
                                                                 <div class="form-group my-2">
                                                                      <label>Deskripsi</label>
                                                                      <textarea class="form-control" rows="3" cols="30"
                                                                           name="deskripsi"><?= $data['deskripsi']?></textarea>
                                                                 </div>

                                                                 <label>Upload Gambar</label>
                                                                 <div class="custom-file">
                                                                      <input type="file" class="custom-file-input"
                                                                           name="gambar">
                                                                      <label class="custom-file-label">Choose
                                                                           file</label>
                                                                 </div>

                                                                 <div class="form-group mb-1">
                                                                      <label>Kategori</label>
                                                                 </div>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio"
                                                                           name="kategori" value="online" <?php echo ($data['kategori']=='online' ? 'checked' : '');?>>
                                                                      <label class="form-check-label">Online</label>
                                                                 </div>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio"
                                                                           name="kategori" id="inlineRadio2"
                                                                           value="offline" <?php echo ($data['kategori']=='offline' ? 'checked' : '');?>>
                                                                      <label class="form-check-label"
                                                                           for="inlineRadio2">Offline</label>
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
                                                                      <input type="date" class="form-control"
                                                                           name="tanggal"
                                                                           value="<?= $data['tanggal']?>">
                                                                 </div>
                                                                 <div class="form-row">

                                                                      <div class="form-group col-md-6 my-1">
                                                                           <label>Jam Mulai</label>
                                                                           <select class="form-control" name="mulai">
                                                                                <option <?= $data['mulai'] == '10:00:00' ? 'selected="selected"' : "";?> >10:00</option>
                                                                                <option <?= $data['mulai'] == '11:00:00' ? 'selected="selected"' : "";?>>11:00</option>
                                                                                <option <?= $data['mulai'] == '12:00:00' ? 'selected="selected"' : "";?>>12:00</option>
                                                                           </select>
                                                                      </div>

                                                                      <div class="form-group col-md-6 my-1">
                                                                           <label>Jam Berakhir</label>
                                                                           <select class="form-control" name="berakhir">
                                                                                <option <?= $data['berakhir'] == '13:00:00' ? 'selected="selected"' : "";?>>13:00</option>
                                                                                <option <?= $data['berakhir'] == '14:00:00' ? 'selected="selected"' : "";?>>14:00</option>
                                                                                <option <?= $data['berakhir'] == '15:00:00' ? 'selected="selected"' : "";?>>15:00</option>
                                                                           </select>
                                                                      </div>
                                                                 </div>

                                                                 <div class="form-group my-1">
                                                                      <label>Tempat</label>
                                                                      <input type="text" class="form-control"
                                                                           placeholder="name" name="tempat"
                                                                           value="<?= $data['tempat']?>">
                                                                 </div>
                                                                 <div class="form-group my-1">
                                                                      <label>Harga</label>
                                                                      <input type="text" class="form-control"
                                                                           placeholder="name" name="harga"
                                                                           value="<?= $data['harga']?>">
                                                                 </div>

                                                                 <div class="form-group my-1">
                                                                      <label>Benefit</label>
                                                                 </div>
                                                               <?php
                                                                 $benefit = explode(',',$data['benefit']);
                                                               ?>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="checkbox"
                                                                           name="benefit[]" value="snacks" <?php echo in_array('snacks',$benefit) ? 'checked' : ''?>>
                                                                      <label class="form-check-label">Snacks</label>
                                                                 </div>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="checkbox"
                                                                           name="benefit[]" value="sertifikat" <?php echo in_array('sertifikat',$benefit) ? 'checked' : ''?>>
                                                                      <label class="form-check-label">Sertifikat</label>
                                                                 </div>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="checkbox"
                                                                           name="benefit[]" id="inlineRadio2"
                                                                           value="souvenir" <?php echo in_array('souvenir',$benefit) ? 'checked' : ''?>>
                                                                      <label class="form-check-label">Souvenir</label>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="modal-footer">
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
                    <a href="deleteEvent.php?id=<?php echo $data['id']?>" class="btn btn-danger" style="width:8rem;">Delete</a>
               </div>
          </div>
     </div>
     <?php }?>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>
</body>
</html>