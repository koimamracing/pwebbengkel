<?= $this->extend('layout/header') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Detail Member</h2>
            <div class="card shadow rounded-4 p-3">
                <div class="row g-0 align-items-center">
                    <!-- FOTO -->
                    <div class="col-md-4 text-center">
                        <img src="<?= base_url('img/' . $member['sampul']); ?>" 
                             class="img-fluid rounded-3 shadow-sm" 
                             alt="Foto Member">
                    </div>

                    <!-- DATA -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title fw-bold mb-3"><?= esc($member['username']); ?></h4>
                            <p class="card-text mb-1"><strong>Nama Lengkap:</strong> <?= esc($member['nama']); ?></p>
                            <p class="card-text mb-1"><strong>NIK:</strong> <?= esc($member['nik']); ?></p>
                            <p class="card-text mb-3"><strong>No. HP:</strong> <?= esc($member['no_hp']); ?></p>

                            <div class="d-flex gap-2 mt-3">
                                <a href="<?= base_url('member/edit/' . $member['id_member']); ?>" 
                                   class="btn btn-warning">
                                   <i class="bi bi-pencil-square"></i> Ubah
                                </a>

                                <form action="<?= base_url('member/' . $member['id_member']); ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus member ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOMBOL KEMBALI -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('member'); ?>" class="btn btn-secondary px-4">
                        <i class="bi bi-arrow-left"></i> Kembali Ke Daftar Member
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
