<div class="container-fluid">
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
                <div class="col-sm-6">
                   <h1><?= $title ?></h1>
                </div>
                <?php foreach($anggota as $agt) : ?>
                    <form method="post" action="<?php echo base_url(). 'user/update_anggota'?>">
                    <div class="form-group">
                        <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $agt->id_anggota ?>">
                        </div>
                        
                        <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $agt->nama ?>">
                        </div>

                        <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="<?php echo $agt->jabatan ?>">
                        </div>

                        <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $agt->alamat ?>">
                        </div>

                        <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="telp" class="form-control" value="<?php echo $agt->telp ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                    </form>
                <?php endforeach ?>
</div>
</div>
</div>