<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>
<div class="sb-sidenav-footer">
                        
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Data Pemain</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Pemain</h6> 
        <a href="<?php echo base_url('admin/pemain/export/') ?>" class="btn btn-primary"><i class="fas fa-file-download"></i> Export Excel </a>
    </div>
    <form action="" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Masukan Nama Pencarian.." name="keyword" id="keyword" >
  <button class="btn btn-outline-secondary" type="submit"  name="submit"id="button-addon2">Cari</button>
</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>jenis kelamin</th>
                        <th>Alamat</th>
                        <th>Kabupaten</th>
                        <th>provinsi</th>
                        <th>Agama</th>
                        <th>Kewarganegaraam</th>
                        <th>No Posisi</th>
                        <th>Kaki terkuat</th>
                        <th>TB</th>
                        <th>BB</th>
                        <th>Klub Asal</th>
                        <th>Email</th>
                        <th>No Whatsapp</th>
                        <th>KTP</th>
                        <th>Surat rekomendasi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1 + (5 * ($currentPage -1)); ?>
               
                <?php foreach ($table as $row): ?>
<tr>
<th ><?= $i++;?></th>
<td><?= $row['kode']; ?></td>   
<td><?= $row['nama_lengkap']; ?></td>
<td><?= $row['tempat_lahir']; ?></td>
<td><?= $row['tanggal_lahir']; ?></td>
<td><?= $row['jenis_kelamin']; ?></td>
<td><?= $row['alamat_lengkap']; ?></td>
<td><?= $row['kabupaten']; ?></td>
<td><?= $row['provinsi']; ?></td>
<td><?= $row['agama']; ?></td>
<td><?= $row['kewarganegaraan']; ?></td>
<td><?= $row['no_posisi']; ?></td>
<td><?= $row['kaki_terkuat']; ?></td>
<td><?= $row['tinggi_badan']; ?></td>
<td><?= $row['berat_badan']; ?></td>
<td><?= $row['klub_asal']; ?></td>
<td><?= $row['email_pemain']; ?></td>
<td><?= $row['no_whatsapp']; ?></td>
<td><?= $row['dokumen_ktp']; ?></td>
<td><?= $row['surat_rekomendasi']; ?></td>
<td><?= $row['foto']; ?></td>
<td><a href="<?php echo base_url('admin/pemain/lihatpemain/'.$row['id']) ?>" class="btn btn btn-primary">Lihat</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?= $pager->links('table','default_simple') ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?=$this->endSection(); ?>