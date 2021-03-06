<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 14:27:05 GMT -->

<head>
	<meta charset="utf-8" />
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	

	<!-- App css -->
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">

	<div class="account-pages mt-5 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-pattern">

						<div class="card-body p-4">

              <?php if($this->session->flashdata('error')) { ?>
              <div class="alert alert-danger col-12"><center><?=$this->session->flashdata('error');?></center></div>
              <?php } ?>

							<div class="text-center w-75 m-auto">
							Masukan username dan password untuk akses.
							</div>

							<?php echo form_open('auth/proses_login', array('method' => 'POST')) ?>

								<div class="form-group mb-3">
									<label for="emailaddress">Username</label>
									<input class="form-control" type="text" name="username" placeholder="username">
								</div>

								<div class="form-group mb-3">
									<label for="password">Password</label>
									<input class="form-control" type="password" name="password" placeholder="Enter your password">
								</div>

								<div class="form-group mb-0 text-center">
									<button class="btn btn-primary btn-block" type="submit"> Log In </button>
								</div>

							<?php echo form_close() ?>

						</div> <!-- end card-body -->
					</div>
					<!-- end card -->
					<!-- end row -->

				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end page -->


	<footer class="footer footer-alt">
		2015 - 2019 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
	</footer>

	<!-- Vendor js -->
	<script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

	<!-- App js -->
	<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 14:27:05 GMT -->

</html>
