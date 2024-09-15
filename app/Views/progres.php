<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">DOKUMEN PERSYARATAN</h4>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                <form action="">
                  <div class="row mb-3">
                      <div class="col-lg-3">
                          <label for="nameInput" class="form-label">Jenis Pengadaan</label>
                      </div>
                      <div class="col-lg-9">
                          <select class="form-select" name="pengadaan">
                            <option value="">Pilih</option>
                            <option value="CPNS" <?= ($pengadaan == 'CPNS')?'selected':'';?>>CPNS</option>
                            <option value="TEKNIS" <?= ($pengadaan == 'TEKNIS')?'selected':'';?>>PPPK TEKNIS</option>
                            <option value="NAKES" <?= ($pengadaan == 'NAKES')?'selected':'';?>>PPPK TENAGA KESEHATAN</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-lg-3">
                          <label for="websiteUrl" class="form-label">Jenis Formasi</label>
                      </div>
                      <div class="col-lg-9">
                        <select class="form-select" name="jenis">
                          <option value="">Pilih</option>
                          <option value="1" <?= ($jenis == '1')?'selected':'';?>>UMUM</option>
                          <option value="8" <?= ($jenis == '8')?'selected':'';?>>KHUSUS</option>
                        </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-lg-3">
                          <label for="websiteUrl" class="form-label">Jabatan</label>
                      </div>
                      <div class="col-lg-9">
                        <select class="form-select" name="jabatan">
                          <option value="">Pilih</option>
                          <?php foreach ($jabatan as $row) {
                            $select = ($row->jabatan_id == $sjabatan)?'selected':'';
                            echo '<option value="'.$row->jabatan_id.'" '.$select.'>'.$row->jabatan.'</option>';
                          } ?>
                        </select>
                      </div>
                  </div>
                  <div class="text-end">
                      <button type="submit" class="btn btn-primary">Cari</button>
                  </div>
              </form>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5>Syarat Umum</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Persyaratan</th>
                        <th>Wajib?</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($syaratumum as $row) {?>
                        <tr>
                          <td><?= $no;?></td>
                          <td><?= $row->syarat;?></td>
                          <td><?= $row->is_mandatory;?></td>
                        </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5>Syarat Khusus</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Persyaratan</th>
                        <th>Wajib?</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($syaratkhusus as $row) {?>
                        <tr>
                          <td><?= $no;?></td>
                          <td><?= $row->syarat;?></td>
                          <td><?= $row->is_mandatory;?></td>
                        </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
