<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head><body>
<h3 style="text-align: center">Laporan Anggota</h3>
    <table border ="1" cellspacing="0" cellpadding="10" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>

        <?php
                $no=1;
                foreach($anggota as $agt) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $agt->nama ?></td>
                    <td><?php echo $agt->jabatan ?></td>
                    <td><?php echo $agt->alamat ?></td>
                    <td><?php echo $agt->telp ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
</body></html>