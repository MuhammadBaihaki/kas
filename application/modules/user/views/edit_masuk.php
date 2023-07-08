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
                <?php foreach($masuk as $msk) : ?>
                    <form method="post" action="<?php echo base_url(). 'user/update_masuk'?>">
                    <div class="form-group">
                        <input type="hidden" name="id_masuk" class="form-control" value="<?php echo $msk->id_masuk ?>">
                        </div>
                        
                        <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $msk->nama ?>">
                        </div>

                        <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="<?php echo $msk->jabatan ?>">
                        </div>

                        <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" value="<?php echo $msk->jumlah ?>">
                        </div>

                        <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $msk->tanggal ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                    </form>
                <?php endforeach ?>
</div>
</div>
</div>