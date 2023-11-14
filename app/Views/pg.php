<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">PASSING GRADE</h4>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <b>CPNS</b>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>Materi SKD</th>
                        <th>Jumlah Soal</th>
                        <th>Nilai Maksimal</th>
                        <th>PG</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tes Wawasan Kebangsaan</td>
                        <td>30</td>
                        <td>150</td>
                        <td>65</td>
                      </tr>
                      <tr>
                        <td>Tes Intelegensia Umum</td>
                        <td>35</td>
                        <td>175</td>
                        <td>80</td>
                      </tr>
                      <tr>
                        <td>Tes Karakterisik Pribadi</td>
                        <td>45</td>
                        <td>225</td>
                        <td>166</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <b>PPPK DOSEN</b>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>Materi</th>
                        <th>Jumlah Soal</th>
                        <th>Nilai Maksimal</th>
                        <th>PG</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>1. Seleksi Kompetensi Teknis ↴</b></td>
                        <td>90</td>
                        <td>24</td>
                        <td>248</td>
                      </tr>
                      <tr>
                        <td> ↪ Etika dan Tridarma Perguruan Tinggi</td>
                        <td>20</td>
                        <td>100</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td> ↪ Bahasa Inggris</td>
                        <td>20</td>
                        <td>100</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td> ↪ Penalaran dan Pemecahan Masalah</td>
                        <td>20</td>
                        <td>100</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td> ↪ Dimensi Psikologi</td>
                        <td>30</td>
                        <td>150</td>
                        <td>66</td>
                      </tr>
                      <tr>
                        <td><b>2. Manajerial</b></td>
                        <td>25</td>
                        <td rowspan="2">180*</td>
                        <td rowspan="2">117*</td>
                      </tr>
                      <tr>
                        <td><b>3. Sosio Kultural</b></td>
                        <td>20</td>
                      </tr>
                      <tr>
                        <td><b>4. Wawancara</b></td>
                        <td>10</td>
                        <td>40</td>
                        <td>24</td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <i>*)Akumulasi</i>
                  <p>
                    <i>Catatan: Kompetensi Teknis bagi Dosen harus memenuhi Ambang Batas 248 dengan Subtest masing-masing juga harus memenuhi Ambang Batas per subtest.</i>
                  </p>
                  <p>
                    <i>Contoh: Jika seorang peserta mendapatkan poin keseluruhan 248 pada Kompetensi Teknis, namun pada salah satu subtest tidak memenuhi Ambang Batas per subtestnya, maka dianggap tidak memenuhi Nilai Ambang Batas. Juga sebaliknya, Jika
                    mendapatkan Nilai Ambang Batas per subtestnya namun tidak mencapai nilai akumulasi sebesar 248, maka dianggap tidak memenuhi Nilai Ambang Batas.</i>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <b>PPPK FUNGSIONAL</b>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0">
                    <thead>
                      <tr>
                        <th>Materi</th>
                        <th>Jumlah Soal</th>
                        <th>Nilai Maksimal</th>
                        <th>Porsi</th>
                        <th>PG</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Seleksi Kompetensi Teknis</td>
                        <td>90</td>
                        <td>450</td>
                        <td>50%</td>
                        <td rowspan="2"><span class="text-danger">Lihat tabel dibawah</span></td>
                      </tr>
                      <tr>
                        <td>Seleksi Kompetensi Teknis Tambahan (Moderasi Beragama)</td>
                        <td>Belum tersedia</td>
                        <td>Belum tersedia</td>
                        <td>50%</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Seleksi Kompetensi Manajerial</td>
                        <td>25</td>
                        <td rowspan="2">180*</td>
                        <td rowspan="2">-</td>
                        <td rowspan="2">117*</td>
                      </tr>
                      <tr>
                        <td>Seleksi Kompetensi Sosio Kultural</td>
                        <td>20</td>
                      </tr>
                      <tr>
                        <td>Wawancara</td>
                        <td>10</td>
                        <td>40</td>
                        <td>-</td>
                        <td>24</td>
                      </tr>
                    </tbody>
                  </table>
                  <p>
                    <i>*)Akumulasi</i>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <b>PASSING GRADE KOMPETENSI TEKNIS JABATAN</b>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle table-striped-columns mb-0 datatable">
                    <thead class="table-light">
                      <tr>
                        <th>JABATAN</th>
                        <th>PASSING GRADE</th>
                      </tr>
                    </thead>
                    	<tbody>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS DATA ILMIAH</td>
                    			<td>315</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS HUKUM</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS KEBIJAKAN</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS PEMANFAATAN ILMU PENGETAHUAN DAN TEKNOLOGI</td>
                    			<td>315</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS PENGEMBANGAN KOMPETENSI APARATUR SIPIL NEGARA</td>
                    			<td>203</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS STANDARDISASI</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ANALIS SUMBER DAYA MANUSIA APARATUR</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ARSIPARIS</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ASESOR SDM APARATUR</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - GURU</td>
                    			<td>Belum Tersedia</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PAMONG BUDAYA</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENATA PENERBITAN ILMIAH</td>
                    			<td>315</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENERJEMAH BAHASA ARAB</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENERJEMAH BAHASA INGGRIS</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENERJEMAH BAHASA MANDARIN</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENGELOLA PENGADAAN BARANG/JASA</td>
                    			<td>293</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENGEMBANG TEKNOLOGI PEMBELAJARAN</td>
                    			<td>Belum Tersedia</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENGGERAK SWADAYA MASYARAKAT</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENGHULU</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENGUJI MUTU BARANG</td>
                    			<td>203</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENTASHIH MUSHAF AL QURAN</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH AGAMA BUDDHA</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH AGAMA HINDU</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH AGAMA ISLAM</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH AGAMA KATOLIK</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH AGAMA KRISTEN</td>
                    			<td>180</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PERENCANA</td>
                    			<td>315</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PRANATA HUBUNGAN MASYARAKAT</td>
                    			<td>248</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PRANATA KOMPUTER</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PRANATA LABORATORIUM PENDIDIKAN</td>
                    			<td>203</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PUSTAKAWAN</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - STATISTISI</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - WIDYAISWARA</td>
                    			<td>203</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - ARSIPARIS</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - ASISTEN PERPUSTAKAAN</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - PRANATA KOMPUTER</td>
                    			<td>270</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - PRANATA SUMBER DAYA MANUSIA APARATUR</td>
                    			<td>225</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - ADMINISTRATOR KESEHATAN</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - APOTEKER</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - BIDAN</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - DOKTER</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - DOKTER GIGI</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PENYULUH KESEHATAN MASYARAKAT</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PERAWAT</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - PSIKOLOG KLINIS</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>AHLI PERTAMA - TENAGA SANITASI LINGKUNGAN</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - ASISTEN APOTEKER</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - BIDAN</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - FISIOTERAPIS</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - PERAWAT</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - PEREKAM MEDIS</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - PRANATA LABORATORIUM KESEHATAN</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - RADIOGRAFER</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - TEKNISI ELEKTROMEDIS</td>
                    			<td>158</td>
                    		</tr>
                    		<tr>
                    			<td>TERAMPIL - TERAPIS GIGI DAN MULUT</td>
                    			<td>158</td>
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
