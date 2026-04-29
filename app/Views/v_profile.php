<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile Information</h5>

          <!-- Username -->
          <div class="row mb-2">
            <label class="col-sm-2 col-form-label fw-bold">Username</label>
            <div class="col-sm-10">
              <?= session()->get('username') ?>
              <span class="badge bg-danger"><?= session()->get('role') ?></span>
            </div>
          </div>

          <!-- Email -->
          <div class="row mb-2">
            <label class="col-sm-2 col-form-label fw-bold">Email</label>
            <div class="col-sm-10">
              <?= session()->get('email') ?>
            </div>
          </div>

          <!-- Login Time -->
        <div class="row mb-2">
            <label class="col-sm-2 col-form-label fw-bold">Login Time</label>
            <div class="col-sm-10">
                <?= date('d F Y, H:i', strtotime(session()->get('login_time'))) ?> WIB
            </div>
        </div>

          <!-- Status -->
          <div class="row mb-2">
            <label class="col-sm-2 col-form-label fw-bold">Status</label>
            <div class="col-sm-10">
              <span class="badge bg-success">Sudah Login</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>