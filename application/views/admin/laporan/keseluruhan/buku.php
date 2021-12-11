<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top : 20px;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4e73df;
                color: white;
            }
        </style>
    </head><body>
        <div style="text-align:center">
            <h3><?= $title;?> </h3>
        </div>
        <table id="table">
                <tr>
                    <th>No</th>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                </tr>
            <?php
                $no=1;
                foreach($buku as $data){
                ?>
                <tr>
                    <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->id_buku?></td>
                    <td><?php echo $data->judul ?></td>
                    <td><?php echo $data->penerbit ?></td>
                    <td><?php echo $data->tahun_terbit ?></td>
                    <td><?php echo $data->nama_kategori ?></td>
                </tr>
                <?php 
                $no++;
                } 
                ?>
        </table>


        <!-- <?php foreach($totaldata as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 20px;">
            <tr>
                <td  style="padding-bottom: 5px;"><b>Keterangan</b></td>
            </tr>
            <tr>
                <td  width="135">Jumlah Seluruh Data</td>
                <td width="564">: <?= $jml->jml_pengajuansurat ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldatadiproses as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td>Jumlah Data Yang Diproses</td>
                <td width="564">: <?= $jml->jml_diproses ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldataditerima as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td>Jumlah Data Yang Diterima</td>
                <td width="564">: <?= $jml->jml_diterima ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldataditolak as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td width="135">Jumlah Data Yang Ditolak</td>
                <td >: <?= $jml->jml_ditolak ?></td>
            </tr>
        </table>
        <?php } ?> -->
    </body></html>