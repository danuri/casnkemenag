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
      <div class="col-xxl-7">
        <div class="card card-body">
          <script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-post="casnkemenag/103" data-width="100%"></script>
        </div>
        <div class="card">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Jadwal Pendaftaran CASN</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive table-card">
              <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>Jenis Pengadaan</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CPNS</td>
                    <td>22 September 2023, 23:59 WIB</td>
                    <td>09 Oktober 2023, 23:59 WIB</td>
                  </tr>
                  <tr>
                    <td>CPPPK</td>
                    <td>23 September 2023, 23:59 WIB</td>
                    <td>09 Oktober 2023, 23:59 WIB</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-5">
        <div class="d-flex flex-column h-100">
          <div class="row h-100">
            <div class="col-12">

              <div class="card">
                <div class="card-body p-0">
                  <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle text-warning me-2 icon-sm"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    <div class="flex-grow-1 text-truncate">
                      Perhatian
                    </div>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-sm-8">
                      <div class="p-3">
                        <p class="fs-16 lh-base">Pendaftaran hanya melalui portal SSCASN BKN <i class="mdi mdi-arrow-right"></i></p>
                        <div class="mt-3">
                          <a href="https://sscasn.bkn.go.id/" class="btn btn-success" target="_blank">Lihat Portal SSCASN!</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="px-3">
                        <img src="assets/images/user-illustarator-2.png" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div> <!-- end card-body-->
              </div>
            </div> <!-- end col-->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="assets/js/countdown.js"></script>
<script type="text/javascript">
const efcc_countdown = new countdown({
  target: '.countdown',
  dayWord: ' hari',
  hourWord: ' jam',
  minWord: ' menit',
  secWord: ' detik'
});
</script>
<?= $this->endSection() ?>
