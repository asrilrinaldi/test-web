<!-- Modal Tambah Teacher -->
<div class="modal fade" id="teacherTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Data Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahTeacher'); ?>" method="POST">
                    <div class="form-group mb-0">
                        <label for="id">ID</label><br>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan ID" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="level">Level</label><br>
                        <input type="text" name="level" id="level" class="form-control" placeholder="1 - Admin" value="1" readonly>
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
<!-- END Modal Tambah Teacher -->

<!-- Modal Tambah Student -->
<div class="modal fade" id="studentTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Data Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahStudent'); ?>" method="POST">
                    <div class="form-group mb-0">
                        <label for="id">ID</label><br>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan ID" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="level">Level</label><br>
                        <input type="text" name="level" id="level" class="form-control" placeholder="1 - Admin" value="2" readonly>
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
<!-- END Modal Tambah Student -->


<!-- Modal Edit Teacher-->
<div class="modal fade" id="teacherEdit">
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
                    <form action="<?= base_url('admin/editTeacher'); ?>" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group mb-0">
                            <label for="nama">Nama</label><br>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')">
                        </div><br>
                        <div class="form-group mb-0">
                            <label for="nama">Password</label><br>
                            <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" required="" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="this.setCustomValidity('')">
                        </div><br>
                        <div class="form-group mb-0">
                            <label for="level">Level</label><br>
                            <input type="text" name="level" id="level" class="form-control" placeholder="1 - Admin" readonly>
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
<!-- END Modal Edit Teacher-->

<!-- Modal Edit Student -->
<div class="modal fade" id="studentEdit">
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
                    <form action="<?= base_url('admin/editStudent'); ?>" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group mb-0">
                            <label for="nama">Nama</label><br>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')">
                        </div><br>
                        <div class="form-group mb-0">
                            <label for="nama">Password</label><br>
                            <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" required="" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="this.setCustomValidity('')">
                        </div><br>
                        <div class="form-group mb-0">
                            <label for="level">Level</label><br>
                            <input type="text" name="level" id="level" class="form-control" placeholder="2 - User" readonly>
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
<!-- END Modal Edit Student -->



<!-- Modal Hapus Teacher -->
<div class="modal fade" id="teacherHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/hapusTeacher'); ?>" method="post">
                <div class="modal-body">
                    <div class="modal-hapus">
                        Apakah anda yakin ingin menghapus data ini?
                        <input type="hidden" id="id" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Hapus Teacher -->

<!-- Modal Hapus Student -->
<div class="modal fade" id="studentHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/hapusStudent'); ?>" method="post">
                <div class="modal-body">
                    <div class="modal-hapus">
                        Apakah anda yakin ingin menghapus data ini?
                        <input type="hidden" id="id" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Hapus Student -->


<!-- Modal Logout  -->
<div class="modal fade" id="modalLogout">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/logout'); ?>" method="post">
                <div class="modal-body">
                    <div class="modal-logout">
                        Apakah yakin ingin keluar?
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
<!-- END Modal Logout  -->