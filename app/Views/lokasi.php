<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Pemilihan Lokasi Ujian SKTT Kementerian Agama RI Ditutup</h4>
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

    $.get('https://myip.mashanz.com', function(res) {
      $('#addr').val(res);
    });
  });

</script>
<?= $this->endSection() ?>
