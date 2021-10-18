<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body pb-0">
                <div class="col-lg">
                    <h1>LOGIN</h1><br>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('pesan') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('sukses')) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('sukses') ?></div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url(); ?>/login/auth">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nm" id="nm" placeholder="Nama" value="<?= set_value('nama') ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="pw" id="pw" placeholder="Password">
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>