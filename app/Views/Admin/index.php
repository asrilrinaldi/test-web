
   
    <div class="card mx-auto" style=" width: 50%; top: 10%;">
        <h3><?= $judul ?></h3>
        <div class="card-header">
            <!-- button modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus">&nbsp;</i>
                Tambah Data
            </button>
        </div>
        <div class="card-body ">
            <table class="table table-striped">
                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mst_student as $row) :  ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['password']; ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach;  ?>
                </tbody>
            </table>

        </div>

    </div>
   