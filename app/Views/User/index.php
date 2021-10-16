<div class="text-center">
    <?php $session = session() ?>
    <h3 class="h3 mb-4 text-gray-800">Halo <?= $judul ?> <?php echo $session->get('nama') ?> :) </h3>
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