<?php $this->extend('layout/header') ?>
<?php $this->section('content') ?>
<div class="container">
    <div class="col">
        <h3 class="mt-2">Form Tambah member</h3>
        <form action="/member/simpan" method="post" class="mt-4" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                    <input type="text" id="username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" autofocus
                        name="username"
                        value="<?= old('username'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" id="nama" class="form-control" name="nama"
                        value="<?= old('nama'); ?>"
                    >
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="nik" class="col-sm-2 col-form-label">Nik</label>
                <div class="col-sm-4">
                    <input type="text" id="nik" class="form-control" name="nik"
                        value="<?= old('nik'); ?>"
                    >
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                <div class="col-sm-4">
                    <input type="number" id="no_hp" class="form-control" name="no_hp" 
                        value="<?= old('no_hp'); ?>">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="no_hp" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-4">
                    <input type="file" id="sampul" class="form-control" name="sampul" <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>>
                    <div class="invalid-feedback">
                        <?= $validation->getError('sampul') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-3">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->endSection() ?>
