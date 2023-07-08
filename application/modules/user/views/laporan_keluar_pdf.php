<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head><body>
<h3 style="text-align: center">Laporan Pengeluaran</h3>
    <table border ="1" cellspacing="0" cellpadding="10" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>

        <?php 
                $no=1;
                foreach($keluar as $klr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $klr->nama ?></td>
                    <td><?php echo $klr->jumlah ?></td>
                    <td><?php echo $klr->tanggal ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
</body></html>