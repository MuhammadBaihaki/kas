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
                                        <h1 class="h4 text-gray-900 mb-4">Form Change Password</h1>
                                    </div>
				<p class="login-box-msg"><?= $this->session->userdata('reset_email'); ?></p>
				
				<?= $this->session->flashdata('message'); ?>
				
				<form action="<?= base_url('auth/changePassword') ?>" method="post">
				<?= form_error('password1', '<small class="text-danger pl-3>','</small>'); ?>
				
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="password" name="password1">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class ="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Retype password" name="password2">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class ="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
					
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Reset Password</button>
					</div>
				</div>
			</form>

			<hr>
			<p class="mb-1">
				<a href="<?= base_url('auth') ?>">Back to Login
			</p>
		</div>
	</div>
</div>