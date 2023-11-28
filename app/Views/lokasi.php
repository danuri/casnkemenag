<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Pemilihan Lokasi Ujian SKTT Kementerian Agama RI</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Validasi Peserta</h4>
          </div>
          <div class="card-body">
            <form class="" action="<?= site_url('lokasi')?>" method="post">
              <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="nik" name="nik">
              </div>
              <div class="mb-3">
                  <label for="nopes" class="form-label">Nomor Peserta</label>
                  <input type="text" class="form-control" id="nopes" name="nopes">
              </div>
              <div class="text-end">
                  <button type="submit" class="btn btn-primary" name="submit">Validasi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Pilih Lokasi SKTT</h4>
          </div>
          <div class="card-body">
            <?php if($auth){ ?>
              <form class="" action="<?= site_url('lokasi/save')?>" method="post">
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="nameInput" class="form-label">Nama</label>
                    </div>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" value="<?= $peserta->nama?>" disabled>
                      <input type="hidden" name="userid" value="<?= encrypt($peserta->nomor_peserta)?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="nameInput" class="form-label">Provinsi</label>
                    </div>
                    <div class="col-lg-9">
                      <select class="form-select" name="provinsi" id="provinsi">
                        <option value="">-Pilih Provinsi-</option>
                        <?php foreach ($provinsi as $row) {
                          $select = ($row->id_provinsi == $peserta->tilok_provinsi)?'selected':'';
                          echo '<option value="'.$row->id_provinsi.'" '.$select.'>'.$row->provinsi.'</option>';
                        } ?>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="kabupaten" class="form-label">Lokasi</label>
                    </div>
                    <div class="col-lg-9">
                      <select class="form-select" name="kabupaten" id="kabupaten">
                        <option value="">-Pilih Lokasi-</option>
                      </select>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
              </form>
            <?php }else{ ?>
            Silahkan masukan NIK dan Nomor Peserta untuk memilih Lokasi Ujian SKTT
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
  $(document).ready(function() {
    if($('#provinsi').val() != ''){
      $('#kabupaten').load('<?= site_url('lokasi/getkab')?>/'+$('#provinsi').val(), function(){
        <?php if($peserta->tilok_kabupaten != ''){ ?>
          $("#kabupaten option[value='<?= $peserta->tilok_kabupaten?>']").attr('selected', 'selected');
          <?php } ?>
      });
    }

    $('#provinsi').on('change', function(event) {
      $('#kabupaten').load('<?= site_url('lokasi/getkab')?>/'+$('#provinsi').val());
    });
  });

</script>
<?= $this->endSection() ?>
