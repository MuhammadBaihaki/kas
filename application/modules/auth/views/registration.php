<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Register</h1>
                                    </div>
 
            <form action="<?= base_url('auth/registration') ?>" method="post">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name" name="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>           
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype Password" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"> 
                    <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
                    <a href="<?= base_url('auth') ?> "class="textcenter">I already have a membership</a>
                    <!-- /.col -->
                    <div class="col-4">
                        
                    </div>
                    <!-- /.col -->
                </div>
            </form>
 
            
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->