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
                                        <h1 class="h4 text-gray-900 mb-4">Form Forgot Password</h1>
                                    </div>
				<?= $this->session->flashdata('message'); ?>
				
				<form action="<?= base_url('auth/forgotPassword') ?>" method="post">
				<?= form_error('email', '<small class="text-danger pl-3>','</small>'); ?>
				
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Email" name="email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class ="fas fa-envelope"></span>
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
		