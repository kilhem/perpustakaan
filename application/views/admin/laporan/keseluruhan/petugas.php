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
                    <th>ID Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            <?php
                $no=1;
                foreach($petugas as $data){
                ?>
                <tr>
                    <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->id_petugas ?></td>
                    <td><?php echo $data->nama_petugas ?></td>
                    <td><?php echo $data->jenis_kelamin ?></td>
                    <td><?php echo $data->telepon ?></td>
                    <td><?php echo $data->alamat ?></td>
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