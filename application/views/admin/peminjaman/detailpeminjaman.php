<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>peminjaman"> Kembali</h6></a><br>
    <form action="<?php echo base_url() . 'tambahpeminjaman'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Form Data Peminjaman</h4>
            </div>
            <div class="card-body">
              <h4>Data Peminjaman</h4>
              <hr>
              <?php
              foreach($head as $data){
                 if($data->returned=="0"){
                  $st = "Belum Dikembalikan";
                  }if($data->returned=="1"){
                    $st = "Sudah Dikembalikan";
                  }
               ?>
              <div class="row">

                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ID Peminjaman</label>
                    <input style="padding-bottom: 10px;" type="text" name="idpeminjaman" class="form-control" readonly value="<?= $data->id_peminjaman ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Petugas</label>
                    <input style="padding-bottom: 10px;" type="text" name="idpeminjaman" class="form-control" readonly value="<?= $data->nama ?>">
                  </div>
                </div>
              </div>
              <div class="row">

                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tanggal Peminjaman</label>
                    <input style="padding-bottom: 10px;" type="text"  class="form-control" readonly value="<?php echo format_indo(date('Y-m-d', strtotime($data->tgl_pinjam)));?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Status Peminjaman</label>
                    <input style="padding-bottom: 10px;" type="text" class="form-control" readonly value="<?= $st ?>">
                  </div>
                </div>
              </div><br>
              <h4>Data Diri Anggota</h4>
              <hr>
              <div class="row">
               
                  <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Id Anggota<small class="text-danger">*</small></label>
                       <input style="padding-bottom: 10px;" type="text" name="idpeminjaman" class="form-control" readonly value="<?= $data->id_anggota ?>">


                      </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Anggota</label>
                      <input style="padding-bottom: 10px;" type="text" value="<?= $data->nama_lengkap ?>" name="namaanggota"  id="namaanggota" class="form-control" readonly>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kelas</label>
                    <input style="padding-bottom: 10px;" type="text" value="<?= $data->kelas ?>" name="kelas" id="kelas" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Jenis Kelamin</label>
                    <input style="padding-bottom: 10px;" type="text" value="<?= $data->jenis_kelamin ?>" id="jeniskelamin" name="jeniskelamin" class="form-control" readonly>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
  </div>
</div>
</div>
  <div class="card">
    <div class="card-body">
      <h4>Data Buku</h4>
      <hr>
    
      <table class="table table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($detail as $data) {
          ?>
            <tr>
              <td align="center"><?php echo $no ?></td>
              <td><?php echo $data->id_buku ?></td>
              <td><?php echo $data->judul ?></td>
              <td><?php echo $data->penerbit ?></td>
              <td><?php echo $data->tahun_terbit ?></td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>


      <br>
    </div>

  </div>
</div><br>