<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>petugas"> Kembali</h6></a><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Petugas</h4>
            <p class="card-category">Masukkan Data Petugas</p>
          </div>
          <div class="card-body">
            <h4>Data Diri Petugas</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdatapetugas'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ID Petugas<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" value="PTG-<?= $id_petugas ?>" name="nip" class="form-control" readonly>
                    <input style="padding-bottom: 10px;" type="hidden" value="<?= $kodeuser ?>" name="iduser" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Lengkap<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Jenis Kelamin<small class="text-danger">*</small></label>
                            <select class="form-control" name="jeniskelamin" style="padding:10px;height: 45px;">
                              <option value="">- Pilih Jenis Kelamin -</option>
                              <option value="Laki-laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                               
                            </select>
                            <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                   </div>
              </div>
                <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telepon</label><small class="text-danger">*</small><br>
                          <input class="form-control" value="<?= set_value('telepon') ?>" id="alamat" name="telepon">
                          <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                        </div>
                      </div>
              
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="email" class="form-control" value="<?= set_value('email') ?>"> 
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                        <label for="current_password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" value="12345" readonly>
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0">
                                    <a role="button" onclick="previewPassword(this, 'password')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label><small class="text-danger">*</small><br>
                          <input class="form-control" value="<?= set_value('alamat') ?>" id="alamat" rows="2" name="alamat">
                          <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                      </div>
              
              </div>
            
              <br>
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>