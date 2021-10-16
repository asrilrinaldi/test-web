 <div class="text-center">
     <?php $session = session() ?>
     <h3 class="h3 mb-4 text-gray-800">Halo <?= $judul ?> <?php echo $session->get('nama') ?> :)</h3>
 </div>

 <!-- TABEL TEACHER -->
 <div class="row justify-content-center">
     <div class="col-md-8">
         <div class="container-fluid">

             <!-- Page Heading -->
             <?php if (session()->get('pesan')) :  ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                     Data Teacher <strong><?= session()->getFlashdata('pesan') ?></strong>
                 </div>
                 <script>
                     $("alert").alert();
                 </script>
             <?php endif;  ?>

             <div class="card">
                 <h3 class="h3 mb-4 text-gray-800">Tabel Teacher (Admin)</h3>
                 <div class="card-header">
                     <!-- button modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#teacherTambah">
                         <i class="fa fa-plus">&nbsp;</i>
                         Tambah Data
                     </button>
                 </div>
                 <div class="card-body">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Id</th>
                                 <th>Nama</th>
                                 <th>Password</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i = 1;  ?>
                             <?php foreach ($teacher as $row) :  ?>
                                 <tr>
                                     <td scope="row"><?= $i; ?></td>
                                     <td><?= $row['id']; ?></td>
                                     <td><?= $row['nama']; ?></td>
                                     <td><?= $row['password']; ?></td>
                                     <td>
                                         <button type="button" data-toggle="modal" data-target="#teacherEdit" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>" data-password="<?= $row['password'] ?>" data-level="<?= $row['level'] ?>"> <i class="fa fa-edit"></i> </button>
                                         <button type="button" data-toggle="modal" data-target="#teacherHapus" id="btn-hapus" class="btn btn-sm btn-danger" data-id="<?= $row['id'] ?>"> <i class="fa fa-trash-alt"></i> </button>
                                     </td>


                                 </tr>
                                 <?php $i++;  ?>
                             <?php endforeach;  ?>
                         </tbody>
                     </table>
                 </div>
             </div>



         </div>
     </div>
 </div><br><br>
 <!-- /.container-fluid -->
 <!-- TABEL STUDENT -->
 <div class="row justify-content-center">
     <div class="col-md-8">
         <div class="container-fluid">

             <!-- Page Heading -->
             <?php if (session()->get('pesan2')) :  ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                     Data Student <strong><?= session()->getFlashdata('pesan2') ?></strong>
                 </div>
                 <script>
                     $("alert").alert();
                 </script>
             <?php endif;  ?>

             <div class="card">
                 <h3 class="h3 mb-4 text-gray-800">Tabel Student (User)</h3>
                 <div class="card-header">
                     <!-- button modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentTambah">
                         <i class="fa fa-plus">&nbsp;</i>
                         Tambah Data
                     </button>
                 </div>
                 <div class="card-body">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Id</th>
                                 <th>Nama</th>
                                 <th>Password</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i = 1;  ?>
                             <?php foreach ($student as $row) :  ?>
                                 <tr>
                                     <td scope="row"><?= $i; ?></td>
                                     <td><?= $row['id']; ?></td>
                                     <td><?= $row['nama']; ?></td>
                                     <td><?= $row['password']; ?></td>
                                     <td>
                                         <button type="button" data-toggle="modal" data-target="#studentEdit" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>" data-password="<?= $row['password'] ?>" data-level="<?= $row['level'] ?>"> <i class="fa fa-edit"></i> </button>
                                         <button type="button" data-toggle="modal" data-target="#studentHapus" id="btn-hapus" class="btn btn-sm btn-danger" data-id="<?= $row['id'] ?>"> <i class="fa fa-trash-alt"></i> </button>
                                     </td>


                                 </tr>
                                 <?php $i++;  ?>
                             <?php endforeach;  ?>
                         </tbody>
                     </table>
                 </div>
             </div>



         </div>
     </div>
 </div>
 <!-- /.container-fluid -->


 </div>
 <!-- End of Main Content -->