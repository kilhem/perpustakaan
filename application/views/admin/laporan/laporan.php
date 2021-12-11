<div class="content">
  <div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Form Laporan</h4>
            </div>
                <div class="card-body">
 <div class="row">
                <form action="<?php echo base_url() . 'penjualan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                </form> 
              </div><br>
              <div class="row">
      <div class="col-md-6">
        <div class="card">
          
          <div class="card-body"> 
            <h4>Laporan Keseluruhan</h4>
            <hr>
            <table>
              <tr>
                <td>

                 <a href="<?php echo base_url()?>laporankeseluruhanbuku" target="_blank"><button class="btn btn-primary">Data Buku</button></a>
                </td>
                <td>
                  
                 <a href="<?php echo base_url()?>laporankeseluruhananggota" target="_blank"><button class="btn btn-primary">Data Anggota</button></a>
                </td>
              </tr>
              <tr >
                <td style="padding-right: 40px;padding-top: 20px;">

                 <a href="<?php echo base_url()?>laporankeseluruhanpetugas" target="_blank"><button class="btn btn-primary">Data Petugas</button></a>
                </td>
                <td style="padding-top: 20px;">
                  
                 <a href="<?php echo base_url()?>laporankeseluruhanpeminjaman" target="_blank"><button class="btn btn-primary">Data Peminjaman</button></a>
                </td>
              </tr>
              <tr >
                <td style="padding-right: 40px;padding-top: 20px;">

                 <a href="<?php echo base_url()?>laporankeseluruhanpengembalian" target="_blank"><button class="btn btn-primary">Data Pengembalian</button></a>
                </td>
                <td style="padding-right: 40px;padding-top: 20px;">

                 
            </table>
  </div>
</div>
</div>
<div class="col-md-6">
        <div class="card">
          
          <div class="card-body"> 
            <h4>Laporan Per Periode</h4>
            <hr>
            <table>
              </tr>
              <tr >
                <td style="padding-right: 53px">

                 <a href="#" data-toggle="modal" data-target="#cetakpeminjamanperiode" ><button class="btn btn-warning">Data Peminjaman</button></a>
                </td>
                <td>
                  
                 <a href="#" data-toggle="modal" data-target="#cetakpengembalianperiode" ><button class="btn btn-warning">Data Pengembalian</button></a>
                </td>
              </tr>
            </table>
          </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div>
</div>
<br>
 <div class="modal fade" id="cetakpeminjamanperiode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Peminjaman Per Periode</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                     <form action="<?php echo base_url(). 'laporanpeminjamanperperiode';?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="row">
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Dari Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Sampai Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="sampai" required class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Cetak</button>
                                        </div>
                                    
                                    </form>
                            </div>
                    </div>
            </div>
            <div class="modal fade" id="cetakpengembalianperiode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Pengembalian Per Periode</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                     <form action="<?php echo base_url(). 'laporanpengembalianperperiode';?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="row">
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Dari Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Sampai Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="sampai" required class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Cetak</button>
                                        </div>
                                    
                                    </form>
                            </div>
                    </div>
            </div>
 