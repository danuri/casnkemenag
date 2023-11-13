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
              <div class="card-header">
                CPNS
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
          </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
