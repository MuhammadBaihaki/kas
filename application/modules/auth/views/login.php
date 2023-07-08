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
                                        <h1 class="h4 text-gray-900 mb-4"> LOGIN APLIKASI KAS </h1>
                                    </div>
            <?= $this->session->flashdata('message'); ?>
 
            <form action="<?= base_url('auth') ?>" method="post">
                 <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                    <!-- /.col -->
                        <button type="submit" class="btn btn-primary btn-block mb-3">Sign In</button>
                    <!-- /.col -->
                    
                <div>
                    <p class="mb-1">
                    <a href="<?= base_url('auth/forgotPassword') ?>">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                    <a href="<?= base_url('auth/registration') ?>" class="textcenter">Register a new membership</a>
                    </p>
                </div>
            </form>
        <div>
            
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->