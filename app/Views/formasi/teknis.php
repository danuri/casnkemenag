<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Formasi CPPPK Tenaga Teknis</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Info!</strong><br>
          Jenis Jabatan tersedia yang termasuk ke PPPK Teknis sebagai berikut:
          <ul>
            <li>PPPK Dosen</li>
            <li>PPPK Guru</li>
            <li>PPPK JF Lainnya (Arsiparis/Pranata Komputer/Dll)</li>
          </ul>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0 datatable">
              <thead class="table-light">
                <tr>
                  <th>LOKASI</th>
                  <th>JABATAN</th>
                  <th>PENDIDIKAN</th>
                  <th>JENIS FORMASI</th>
                  <th>ALOKASI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($formasi as $row) {?>
                  <tr>
                    <td><?= $row->lokasi_formasi?></td>
                    <td><?= $row->jabatan?></td>
                    <td><?= $row->nama_pendidikan?></td>
                    <td><?= $row->jenis_formasi?></td>
                    <td><?= $row->jumlah?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?= $this->endSection() ?>
