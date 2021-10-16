 <div class="text-center">
     <?php $session = session() ?>
     <h3 class="h3 mb-4 text-gray-800">Halo <?= $judul ?> <?php echo $session->get('nama') ?> </h3>
 </div>

 <!-- tabel teacher -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <?php if (session()->get('pesan')) :  ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             Data Student <strong><?= session()->getFlashdata('pesan') ?></strong>
         </div>
         <script>
             $("alert").alert();
         </script>
     <?php endif;  ?>

     <div class="row">
         <div class="col-md-6">
             <?php
                if (session()->get('err')) {
                    echo " <div class='alert alert-danger' role='alert'>" . session()->get('err') . " </div>";
                }
                ?>
         </div>
     </div>

     <div class="card">
         <div class="card-header">
             <!-- button modal -->
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
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
                         <th>Level</th>
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
                             <td><?= $row['level']; ?></td>
                             <td>
                                 <button type="button" data-toggle="modal" data-target="#modalEdit" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>" data-password="<?= $row['password'] ?>" data-level="<?= $row['level'] ?>"> <i class="fa fa-edit"></i> </button>
                                 <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-sm btn-danger" data-id="<?= $row['id'] ?>"> <i class="fa fa-trash-alt"></i> </button>
                             </td>


                         </tr>
                         <?php $i++;  ?>
                     <?php endforeach;  ?>
                 </tbody>
             </table>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->


 </div>
 <!-- End of Main Content -->

 <!-- Modal Tambah -->
 <div class="modal fade" id="modalTambah">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5>Tambah Data</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('admin/tambah'); ?>" method="POST">
                     <div class="form-group mb-0">
                         <label for="id">ID</label><br>
                         <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan ID" required="" oninvalid="this.setCustomValidity('Masukkan ID')" oninput="this.setCustomValidity('')">
                     </div><br>
                     <div class="form-group mb-0">
                         <label for="nama">Nama</label><br>
                         <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')">
                     </div><br>
                     <div class="form-group mb-0">
                         <label for="password">Password</label><br>
                         <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required="" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="this.setCustomValidity('')">
                     </div><br>
                     <select name="level" id="level" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih level')" oninput="this.setCustomValidity('')">
                         <option value="">-Pilih Level-</option>
                         <option value="1">1 - Admin</option>
                         <option value="2">2 - User</option>

                     </select>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                 <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>


 <!-- Modal Edit -->
 <div class="modal fade" id="modalEdit">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5>Edit Data</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="modal-edit">
                     <form action="<?= base_url('admin/edit'); ?>" method="POST">
                         <input type="hidden" name="id" id="id">
                         <div class="form-group mb-0">
                             <label for="nama">Nama</label><br>
                             <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')">
                         </div><br>
                         <div class="form-group mb-0">
                             <label for="nama">Password</label><br>
                             <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" required="" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="this.setCustomValidity('')">
                         </div><br>
                         <select name="level" id="level" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih level')" oninput="this.setCustomValidity('')">
                             <option value="">-Pilih Level-</option>
                             <option value="1">1 - Admin</option>
                             <option value="2">2 - User</option>

                         </select>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                 <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>



 <!-- Modal Hapus  -->
 <div class="modal fade" id="modalHapus">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <form action="<?= base_url('admin/hapus'); ?>" method="post">
                 <div class="modal-body">
                     <div class="modal-hapus">
                         Apakah anda yakin ingin menghapus data ini?
                         <input type="hidden" id="id" name="id">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Yakin</button>
                 </div>
             </form>
         </div>
     </div>
 </div>


 <!-- Modal Logout  -->
 <div class="modal fade" id="modalLogout">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <form action="<?= base_url('admin/logout'); ?>" method="post">
                 <div class="modal-body">
                     <div class="modal-logout">
                         Apakah ingin Keluar?
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                     <button type="submit" class="btn btn-danger">Yakin</button>
                 </div>
             </form>
         </div>
     </div>
 </div>