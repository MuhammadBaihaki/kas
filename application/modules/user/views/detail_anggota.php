<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        
                        <div class="card-body">
                            <div class="form-group">
        <h3>Detail Anggota</h3>
        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><?php echo $detail->jabatan ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat ?></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td><?php echo $detail->telp ?></td>
            </tr>
        </table>
    </section>
</div>
</div>

