<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Selamat Datang Calon CASN Kementerian Agama RI</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0 datatable">
              <thead class="table-light">
                <tr>
                  <th>LOKASI</th>
                  <th>JABATAN</th>
                  <th>PENDIDIKAN</th>
                  <th>ALOKASI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($formasi as $row) {?>
                  <tr>
                    <td><?= $row->lokasi_formasi?></td>
                    <td><?= $row->jabatan?></td>
                    <td><?= $row->nama_pendidikan?></td>
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
