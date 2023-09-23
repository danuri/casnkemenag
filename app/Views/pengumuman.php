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
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Pengumuman</th>
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
