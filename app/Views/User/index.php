<div class="text-center">
    <?php $session = session() ?>
    <h3 class="h3 mb-4 text-gray-800">Halo <?= $judul ?> <?php echo $session->get('nama') ?> </h3>
</div>

<!-- TABEL TEACHER -->
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="container-fluid">
            <!-- Page Heading -->

            <div class="card">
                <div class="card-header">
                    <h3 class="h3 mb-4 text-gray-800">Tabel Teacher</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Password</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teacher as $row) :  ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['password']; ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- TABEL STUDENT -->
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="container-fluid">
            <!-- Page Heading -->

            <div class="card">
                <div class="card-header">
                    <h3 class="h3 mb-4 text-gray-800">Tabel Student</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($student as $row) :  ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['password']; ?></td>
                                </tr>
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
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')" value="<?= $row['nama'] ?>">
                        </div><br>
                        <div class="form-group mb-0">
                            <label for="nama">Password</label><br>
                            <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')" value="<?= $row['nama'] ?>">
                        </div><br>
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