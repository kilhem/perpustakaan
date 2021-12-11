<script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <script src="<?= base_url('assets/js/jquery-1.9.1.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/datatables-demo.js')?>"></script>

    <script src="<?= base_url(); ?>assets/js/script.js"></script>

    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapus').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapus").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idbuku" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbuku" class="form-control" value='+datanya[2]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusdata').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusDokter").html('<input style="padding-bottom: 10px;" type="hidden" name="idpetugas" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value='+datanya[1]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubah').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="bukumasuk" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbuku" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Judul Buku</label><input style="padding-bottom: 10px;" type="text" name="jduulbuku" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Penerbit</label><input style="padding-bottom: 10px;" type="text" name="penerbit" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Tahun Terbit</label><input style="padding-bottom: 10px;" type="text" name="tahunterbit" class="form-control" value='+datanya[4]+' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Buku</label><input style="padding-bottom: 10px;" type="text" name="jumlahbuku" class="form-control" value='+datanya[5]+'> <input style="padding-bottom: 10px;" type="hidden" name="jumlahbukuasal" class="form-control" value='+datanya[5]+' readonly></div></div></div>');
        });
    
    });
</script>
<script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubahbuku').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="bukurusak" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbuku" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Judul Buku</label><input style="padding-bottom: 10px;" type="text" name="jduulbuku" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Penerbit</label><input style="padding-bottom: 10px;" type="text" name="penerbit" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Tahun Terbit</label><input style="padding-bottom: 10px;" type="text" name="tahunterbit" class="form-control" value='+datanya[4]+' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Buku</label><input style="padding-bottom: 10px;" type="text" name="jumlahbuku" class="form-control" value='+datanya[5]+'> <input style="padding-bottom: 10px;" type="hidden" name="jumlahbukuasal" class="form-control" value='+datanya[5]+' readonly></div></div></div>');
        });
    
    });
</script>
<script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusbukurusak').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusBuku").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idbuku" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="bukurusak" class="form-control" value='+datanya[2]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbuku" class="form-control" value='+datanya[3]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubahbukuhilang').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="bukuhilang" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbuku" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Judul Buku</label><input style="padding-bottom: 10px;" type="text" name="jduulbuku" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Penerbit</label><input style="padding-bottom: 10px;" type="text" name="penerbit" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Tahun Terbit</label><input style="padding-bottom: 10px;" type="text" name="tahunterbit" class="form-control" value='+datanya[4]+' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Buku</label><input style="padding-bottom: 10px;" type="text" name="jumlahbuku" class="form-control" value='+datanya[5]+'> <input style="padding-bottom: 10px;" type="hidden" name="jumlahbukuasal" class="form-control" value='+datanya[5]+' readonly></div></div></div>');
        });
    
    });
</script>
<script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusbukuhilang').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusBuku").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idbuku" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="bukuhilang" class="form-control" value='+datanya[2]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbuku" class="form-control" value='+datanya[3]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusbuku').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusBuku").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idbuku" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="bukumasuk" class="form-control" value='+datanya[2]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbuku" class="form-control" value='+datanya[3]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
</body>

</html>