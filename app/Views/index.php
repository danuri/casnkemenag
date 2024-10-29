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

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card">
          <div class="bg-warning-subtle position-relative">
            <div class="card-body p-5">
              <div class="text-center">
                <h3>Tata Cara Pendaftaran PPPK<br>Kementerian Agama</h3>
                <p class="mb-0 text-muted">Tahun Anggaran 2024</p>
              </div>
            </div>
            <div class="shape">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="60" preserveAspectRatio="none" viewBox="0 0 1440 60">
                <g mask="url(&quot;#SvgjsMask1001&quot;)" fill="none">
                  <path d="M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z" style="fill: var(--vz-secondary-bg);"></path>
                </g>
                <defs>
                  <mask id="SvgjsMask1001">
                    <rect width="1440" height="60" fill="#ffffff"></rect>
                  </mask>
                </defs>
              </svg>
            </div>
          </div>
          <div class="card-body p-4">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i data-feather="check-circle" class="text-success icon-dual-success icon-xs"></i>
              </div>
              <div class="flex-grow-1">
                <h5>Cek Formasi Pada Aplikasi PDM</h5>
                <p class="text-muted">Anda diwajibkan mengakses laman PDM Non ASN melalui aplikasi <a href="https://pdm-nonasn.kemenag.go.id/" target="_blank">https://pdm-nonasn.kemenag.go.id/</a>.</p>
                <p class="text-muted">Formasi yang Anda lamar, <strong>harus sesuai</strong> dengan Formasi yang tertera pada aplikasi PDM.</p>
                <p class="text-muted">Ketidaksesuaian formasi yang dilamar pada SSCASN akan mengakibatkan status kelulusan Administrasi Anda.</p>
                <p class="text-muted">Berikut Tata Cara cek Formasi pada PDM:</p>
                <ul class="text-muted">
                  <li>
                    <p>Buka Aplikasi PDM Non-ASN melalui <a href="https://pdm-nonasn.kemenag.go.id/" target="_blank">https://pdm-nonasn.kemenag.go.id/</a>.</p>
                  </li>
                  <li>
                    <p>Login menggunakan NIK dan Password yang digunakan sebelumnya.</p>
                  </li>
                  <li>
                    <p>Perhatikan Informasi yang tertera pada Aplikasi PDM Non-ASN.</p>
                  </li>
                  <li>
                    <p>Klik <strong>Generate</strong>.</p>
                  </li>
                  <li>
                    <p>Unduh/<i>Download</i> Bukti cek formasi yang sudah disediakan.</p>
                  </li>
                  <li>
                    <p>Dokumen yang diunduh menjadi persyaratan Anda ketika melamar PPPK pada SSCASN.</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i data-feather="check-circle" class="text-success icon-dual-success icon-xs"></i>
              </div>
              <div class="flex-grow-1">
                <h5>Daftar Akun SSCASN</h5>
                <p class="text-muted">Pendaftaran PPPK dilakukan melalui https://sscasn.bkn.go.id/. Anda diharuskan membuat akun terlebih dahulu. Pastikan pembuatan Akun menggunakan NIK yang sesuai dengan yang terdaftar pada Aplikasi Non-ASN</p>
                <p class="text-muted">Petunjuk pendaftaran Akun SSCASN:</p>
                <ul class="text-muted vstack gap-2">
                  <li>
                    Silahkan baca melalui <a href="https://sscasn.bkn.go.id/bukupetunjuk" target="_blank">https://sscasn.bkn.go.id/bukupetunjuk</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i data-feather="check-circle" class="text-success icon-dual-success icon-xs"></i>
              </div>
              <div class="flex-grow-1">
                <h5>Daftar Formasi PPPK Kementerian Agama</h5>
                <p class="text-muted">Sebelum Anda mendaftar, baca kembali pengumuman terkait dokumen persyaratan pada <a href="https://kemenag.go.id/informasi/pengumuman-pengadaan-pppk-kemenag-formasi-2024" target="_blank">Pengumuman Pengadaan PPPK Kemenag Formasi 2024</a>.</p>
                <p class="text-muted">Melamar Formasi:</p>
                <ul class="text-muted vstack gap-2">
                  <li>
                    Silahkan baca melalui <a href="https://sscasn.bkn.go.id/bukupetunjuk" target="_blank">https://sscasn.bkn.go.id/bukupetunjuk</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="text-end">
              <a href="#!" class="btn btn-danger">I'm Understand</a>
            </div>
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
