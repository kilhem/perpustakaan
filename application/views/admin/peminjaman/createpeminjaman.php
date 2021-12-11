<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>peminjaman"> Kembali</h6></a><br>
    <form action="<?php echo base_url() . 'tambahpeminjaman'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Form Data Peminjaman</h4>
              <p class="card-category">Masukkan Data Peminjaman</p>
            </div>
            <div class="card-body">
              <h4>Data Peminjaman</h4>
              <hr>
              <div class="row">

                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ID Peminjaman</label>
                    <input style="padding-bottom: 10px;" type="text" name="idpeminjaman" class="form-control" readonly value="PMJ-<?= $id_peminjaman ?>">
                    <input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value="<?= $user->id_user ?>">
                  </div>
                </div>
              </div><br>
              <h4>Data Diri Anggota</h4>
              <hr>
              <div class="row">
                <form action="<?php echo base_url() . 'peminjaman/addlistbuku'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                  <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Id Anggota<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="idanggota" name="idanggota" readonly>
                        <span class="input-group-btn" required>
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalanggota">Cari</button>
                        </span>


                      </div>
                      <?= form_error('idanggota', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Anggota</label>
                      <input style="padding-bottom: 10px;" type="text" name="namaanggota" id="namaanggota" class="form-control" readonly>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kelas</label>
                    <input style="padding-bottom: 10px;" type="text" name="kelas" id="kelas" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Jenis Kelamin</label>
                    <input style="padding-bottom: 10px;" type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" readonly>
                  </div>
                </div>
              </div>
            </div>
    </form>
  </div>
  <div class="card">
    <div class="card-body">
       <?= $this->session->flashdata('message');?>
      <h4>Data Buku</h4>
      <hr>
      <form action="<?php echo base_url() . 'peminjaman/addlistbuku'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="row">
          <div class="col-md-6">
            <input style="padding-bottom: 10px;" type="hidden" name="idpeminjaman" class="form-control" readonly value="PMJ-<?= $id_peminjaman ?>">
            <div class="form-group">
              <label class="bmd-label-floating">Id Buku<small class="text-danger">*</small></label>
              <div class="input-group">
                <input type="text" class="form-control" id="idbuku" name="idbuku" readonly autofocus required>
                <span class="input-group-btn" >
                  <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalbuku">Cari</button>
                </span>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Judul Buku</label>
              <input style="padding-bottom: 10px;" id="judul" type="text" name="judul" class="form-control" readonly>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Penerbit</label>
              <input style="padding-bottom: 10px;" id="penerbit" type="text" name="penerbit" class="form-control" readonly>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Tahun Terbit</label>
              <input style="padding-bottom: 10px;" id="tahunterbit" type="number" name="tahunterbit" class="form-control" readonly> <input style="padding-bottom: 10px;" id="persediaanawal" type="hidden" name="persediaanawal" class="form-control" readonly><input style="padding-bottom: 10px;" id="bukukeluar" type="hidden" name="bukukeluar" class="form-control" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div><br>
      </form>
      <table class="table table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Pengaturan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($read as $data) {
          ?>
            <tr>
              <td align="center"><?php echo $no ?></td>
              <td><?php echo $data->id_buku ?></td>
              <td><?php echo $data->judul ?></td>
              <td><?php echo $data->penerbit ?></td>
              <td><?php echo $data->tahun_terbit ?></td>
              <td>
              <a href="#" class="hapus btn btn-sm btn-danger" role="button" data-toggle="modal" data-target="#ModalHapus" id="<?=$data->id?>|<?=$data->id_buku?>|<?=$data->buku_keluar?>|" ><i class="fas fa-fw fa-trash"></i></a></td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>


      <br>
      <hr>
      <button style="margin-left: 700px;" type="submit" class="btn btn-primary">Simpan</button>
    </div>

  </div>
</div>
</div>
</form>
</div><br>
</div>
</div>
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
              <form action="<?php echo base_url(). 'peminjaman/deletelistbuku';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="modal-body" id="IsiModalHapus">   
              </div>
              <div class="modal-footer">
                   <button type="submit" class="btn btn-danger">Ya</button>
                <a class="btn btn-primary" type="button" data-dismiss="modal">Cancel</a>
              </div>
              </form>
            </div>
          </div>
        </div>