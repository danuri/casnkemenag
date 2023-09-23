<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="card rounded-0 bg-soft-primary mx-n4 mt-n4 border-0">
          <div class="px-4">
            <div class="row">
              <div class="col-xxl-5 align-self-center">
                <div class="py-4">
                  <h4 class="display-6 coming-soon-text">Frequently asked questions</h4>
                  <p class="text-muted fs-15 mt-3">JIka Anda tidak menemukan jawaban, silahkan cari informasi melalui kolom komentar Instagram atau Channel <a href="https://t.me/casnkemenagcr">Telegram.</p>
                </div>
              </div>
              <div class="col-xxl-3 ms-auto">
                <div class="mb-n5 pb-1 faq-img d-none d-xxl-block">
                  <img src="assets/images/faq-img.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <!-- end card body -->
        </div>
      </div>
    </div>
    <div class="row justify-content-evenly mb-4">
      <div class="col-lg-6">
        <div class="mt-3">
          <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0 me-1">
              <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
            </div>
            <div class="flex-grow-1">
              <h5 class="fs-17 mb-0 fw-semibold">Pertanyaan Umum</h5>
            </div>
          </div>

          <div class="accordion accordion-border-box" id="genques-accordion">
            <?php foreach ($general as $row) {?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="genques-heading<?= $row->id?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapse<?= $row->id?>" aria-expanded="false" aria-controls="genques-collapse<?= $row->id?>" fdprocessedid="attyp">
                    <?= $row->question?>
                  </button>
                </h2>
                <div id="genques-collapse<?= $row->id?>" class="accordion-collapse collapse" aria-labelledby="genques-heading<?= $row->id?>" data-bs-parent="#genques-accordion" style="">
                  <div class="accordion-body">
                    <?= $row->answer?>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mt-3">
          <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0 me-1">
              <i class="ri-user-settings-line fs-24 align-middle text-success me-1"></i>
            </div>
            <div class="flex-grow-1">
              <h5 class="fs-17 mb-0 fw-semibold">Persyaratan</h5>
            </div>
          </div>

          <div class="accordion accordion-border-box" id="manageaccount-accordion">
            <?php foreach ($syarat as $row) {?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="genques-heading<?= $row->id?>2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapse<?= $row->id?>2" aria-expanded="false" aria-controls="genques-collapse<?= $row->id?>2" fdprocessedid="attyp">
                    <?= $row->question?>
                  </button>
                </h2>
                <div id="genques-collapse<?= $row->id?>2" class="accordion-collapse collapse" aria-labelledby="genques-heading<?= $row->id?>2" data-bs-parent="#genques-accordion" style="">
                  <div class="accordion-body">
                    <?= $row->answer?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?= $this->endSection() ?>
