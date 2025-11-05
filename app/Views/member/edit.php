<?= $this->extend('layout/header') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="col-md-8">
        <h3 class="mt-2">Form Ubah Member</h3>
        <form action="/member/update/<?= $member['id_member']; ?>" method="post" class="mt-4" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="sampullama" value="<?= $member['sampul']; ?>">

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" id="username"
                        class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                        name="username" value="<?= old('username') ?: $member['username'] ?>" autofocus>
                    <div class="invalid-feedback"><?= $validation->getError('username'); ?></div>
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" id="nama" class="form-control" 
                           name="nama" value="<?= old('nama') ?: $member['nama'] ?>">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-6">
                    <input type="text" id="nik" class="form-control" 
                           name="nik" value="<?= old('nik') ?: $member['nik'] ?>">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-6">
                    <input type="number" id="no_hp" class="form-control" 
                           name="no_hp" value="<?= old('no_hp') ?: $member['no_hp'] ?>">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-4">
                    <input type="file" id="sampul" name="sampul"
                           class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('sampul'); ?></div>
                </div>
            </div>

            <div class="form-group row mt-3">
                <div class="col-sm-4 offset-sm-2">
                    <button type="submit" class="btn btn-primary px-4">Ubah</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
