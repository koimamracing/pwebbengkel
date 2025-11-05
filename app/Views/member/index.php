<?= $this->extend('layout/header') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="mt-2">Daftar Member</h3>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Pencarian Data Member" name="cari">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
        </div>
      </form>
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>
    <a href="/member/tambah" class="btn btn-primary">Tambah Data Buku</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Sampul</th>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">No HP</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach ($member as $m): ?>
          <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><img src="/img/<?= $m['sampul'] ?>" alt="" width="75"></td>
            <td><?= $m['username'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['nik'] ?></td>
            <td><?= $m['no_hp'] ?></td>
            <td>
              <a href="/member/<?= $m['id_member']?>">Detail</a>
              <a href="/member/edit/<?= $m['id_member'] ?>">Edit</a>
              <form action="/member/<?= $m['id_member'] ?>" method="post" class="d-inline">
              <?= csrf_field() ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="p-0 border-0 bg-transparent text-danger " 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('member', 'page_member') ?>  
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
