<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">PENGUMUMAN</h4>
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
                            <option value="CPNS">CPNS</option>
                            <option value="TEKNIS">PPPK TEKNIS</option>
                            <option value="NAKES">PPPK TENAGA KESEHATAN</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-lg-3">
                          <label for="websiteUrl" class="form-label">Jenis Formasi</label>
                      </div>
                      <div class="col-lg-9">
                        <select class="form-select" name="pengadaan">
                          <option value="">Pilih</option>
                          <option value="UMUM">UMUM</option>
                          <option value="KHUSUS">KHUSUS</option>
                        </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-lg-3">
                          <label for="websiteUrl" class="form-label">Jabatan</label>
                      </div>
                      <div class="col-lg-9">
                        <select class="form-select" name="pengadaan">
                          <option value="">Pilih</option>
                          <?php foreach ($jabatan as $row) {
                            // code...
                            echo '<option value="'.$row->jabatan_id.'">'.$row->jabatan.'</option>';
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
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th width="70%">Pengumuman</th>
                        <th>Download</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>22-09-2023</td>
                        <td>Pelaksanaan Seleksi Calon Pegawai Pemerintah dengan Perjanjian Kerja (CPPPK) Kementerian Agama Republik Indonesia Tahun Anggaran 2023</td>
                        <td><a href="https://kemenag.go.id/informasi/pengumuman-pendaftaran-seleksi-calon-pppk-kemenag-tahun-2023" target="_blank">Download</a></td>
                      </tr>
                      <tr>
                        <td>22-09-2023</td>
                        <td>Pelaksanaan Seleksi Calon Pegawai Negeri Sipil (CPNS) Kementerian Agama Republik Indonesia Tahun Anggaran 2023</td>
                        <td><a href="https://kemenag.go.id/informasi/pengumuman-pendaftaran-seleksi-calon-cpns-kemenag-tahun-2023" target="_blank">Download</a></td>
                      </tr>
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
