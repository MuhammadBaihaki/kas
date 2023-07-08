<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head><body>
<h3 style="text-align: center">Laporan Kas Masuk</h3>
    <table border ="1" cellspacing="0" cellpadding="10" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>

        <?php 
                $no=1;
                foreach($masuk as $msk) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $msk->nama ?></td>
                    <td><?php echo $msk->jabatan ?></td>
                    <td><?php echo $msk->jumlah ?></td>
                    <td><?php echo $msk->tanggal ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
</body></html>