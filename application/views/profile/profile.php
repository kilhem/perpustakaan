<div class="content">
  <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Profile Saya</h1>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?= base_url('assets/img/profile/'). $user->image?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Data Akun</h5>
            <hr>
            <p class="card-text">Nama          : <?= $user->nama ?></p>
            <p class="card-text">Email         : <?= $user->email ?></p>
            <p class="card-text"><small class="text-muted">Akun dibuat pada <?= format_indo(date('Y-m-d', strtotime($user->tanggal_daftar))); ?></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
