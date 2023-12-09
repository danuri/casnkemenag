<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">INFO SKTT PPPK KEMENTERIAN AGAMA T.A 2023</h4>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h3>Jadwal Ujian</h3>
              </div>
              <div class="card-body">
                <b>Selasa, 12 Desember 2023</b>
                <p>Sesi Peserta sesuai pengumuman</p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SESI</th>
                      <th>WAKTU (WIB)</th>
                      <th>DURASI</th>
                      <th>KETERANGAN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="2" class="text-center">I</td>
                      <td>06.30 s.d 07.30</td>
                      <td>60 Menit</td>
                      <td>
                        1. Registrasi<br>
                        2. Penitipan Barang<br>
                        3. Body Checking<br>
                        4. Peserta Masuk Ruang Tunggu<br>
                        5. Peserta Masuk Ruang Seleksi<br>
                      </td>
                    </tr>
                    <tr class="fw-bold">
                      <td>07.30 s.d 09.00</td>
                      <td>90 Menit</td>
                      <td>Pelaksanaan SKTT</td>
                    </tr>
                    <tr>
                      <td rowspan="2" class="text-center">II</td>
                      <td>08.30 s.d 09.30</td>
                      <td>60 Menit</td>
                      <td>
                        1. Registrasi<br>
                        2. Penitipan Barang<br>
                        3. Body Checking<br>
                        4. Peserta Masuk Ruang Tunggu<br>
                        5. Peserta Masuk Ruang Seleksi<br>
                      </td>
                    </tr>
                    <tr class="fw-bold">
                      <td>09.30 s.d 11.00</td>
                      <td>90 Menit</td>
                      <td>Pelaksanaan SKTT</td>
                    </tr>
                    <tr>
                      <td rowspan="2" class="text-center">III</td>
                      <td>11.30 s.d 12.30</td>
                      <td>60 Menit</td>
                      <td>
                        1. Registrasi<br>
                        2. Penitipan Barang<br>
                        3. Body Checking<br>
                        4. Peserta Masuk Ruang Tunggu<br>
                        5. Peserta Masuk Ruang Seleksi<br>
                      </td>
                    </tr>
                    <tr class="fw-bold">
                      <td>12.30 s.d 14.00</td>
                      <td>90 Menit</td>
                      <td>Pelaksanaan SKTT</td>
                    </tr>
                    <tr>
                      <td rowspan="2" class="text-center">IV</td>
                      <td>13.30 s.d 14.30</td>
                      <td>60 Menit</td>
                      <td>
                        1. Registrasi<br>
                        2. Penitipan Barang<br>
                        3. Body Checking<br>
                        4. Peserta Masuk Ruang Tunggu<br>
                        5. Peserta Masuk Ruang Seleksi<br>
                      </td>
                    </tr>
                    <tr class="fw-bold">
                      <td>14.30 s.d 16.00</td>
                      <td>90 Menit</td>
                      <td>Pelaksanaan SKTT</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3>Jadwal Uji Coba Aplikasi</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Hari/Tanggal</th>
                      <th>Jam Pelaksanaan (WIB)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="2">Sabtu, 09 Desember 2023</td>
                      <td>10.00 s.d 12.00</td>
                    </tr>
                    <tr>
                      <td>13.00 s.d 15.00</td>
                    </tr>
                    <tr>
                      <td rowspan="2">Minggu, 10 Desember 2023</td>
                      <td>10.00 s.d 12.00</td>
                    </tr>
                    <tr>
                      <td>13.00 s.d 15.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3>Tata Cara Konfigurasi</h3>
              </div>
              <div class="card-body">
                <h5>1. Instalasi</h5>
                <ol style="list-style-type:lower-alpha">
                  <li>Download Safe Exam Browser
                    <ul>
                      <li>Download sesuai jenis Sistem Operasi (Buka link: <a href="https://safeexambrowser.org/download_en.html" target="_blank">https://safeexambrowser.org/download_en.html</a>)</li>
                      <li>Gunakan versi terbaru: 3.6.0</li>
                      <li>Gunakan versi 2.4.1 (Old Release) jika versi 3.4.1 gagal instal</li>
                      <li>Lakukan proses instalasi sampai selesai</li>
                    </ul>
                  </li>
                </ol>

                <h5>2. Konfigurasi</h5>
                <ol style="list-style-type:lower-alpha">
                  <li>Buka SEB Configuration Tools</li>
                  <li>Pada Tab General isi link https://sktt.kemenag.go.id</li>
                  <li>Buka Tab Browser</li>
                  <li>Isikan Suffix dengan: <b>skttkemenag23</b></li>
                  <li>Klik menu File > Save Settings</li>
                  <li>Tutup <b>SEB Configuration Tools</b> dan jalankan <b>Safe Exam Browser</b></li>
                  <li>Proses Instalasi berhasil jika muncul Halaman Login CAT SKTT</li>
                </ol>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/pUkq7qaSMB8?si=sdHxioyJ-LvaOLL2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
