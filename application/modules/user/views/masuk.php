       <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <h1><?= $title ?></h1>
                </div>
            </div>
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
            <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#masuk"><i class="fas fa-plus fa-sm"> Tambah Kas Masuk</i></button>
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('user/pdf_masuk')?>"><i class="fas fa-file"></i> Cetak PDF</a>
            
            <div class="row mb-2">
            <div class="navbar-form navbar-right col-lg-4">
                    <?php echo form_open('user/cari_masuk')?>
                    <div class="input-group">
                            <input type="text" name="keyword"class="form-control bg-light border-1 small" placeholder="Cari"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    <?php echo form_close() ?>
            </div>
            </div>
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th colspan="3">Aksi</th>
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
                    <td>
                    <?php echo anchor('user/detail_masuk/'. $msk->id_masuk,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?>
                    </td>
                    <td><?php echo anchor('user/edit_masuk/'. $msk->id_masuk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                    </td>
                    <td><?php echo anchor('user/hapus_masuk/'. $msk->id_masuk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div><!-- /.container-fluid -->
        <!-- Modal -->
        <div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kas Masuk</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'user/tambah_masuk'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" format="Y-m-d" name="tanggal" class="form-control">
                    </div>
                 </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="btn-submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>