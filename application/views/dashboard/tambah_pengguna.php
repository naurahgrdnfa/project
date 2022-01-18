<link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
	$(function() {
		$("#datepicker").datepicker({
			maxDate: "D"
		});
	});
</script>
<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">


			<form action="<?= base_url('dashboard/input_data_pengguna') ?>" enctype="multipart/form-data" method="post">
				<div class="container-fluid">
					<!-- Illustrations -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h4 class="page-title">Form Tambah Pengguna</h4>
						</div>
						<div class="card-body">
							<div class="text-center">
								<font color="red"><b>
										<?php if (!empty($this->session->flashdata('error'))) {
											echo $this->session->flashdata('error');
										} ?></b></font>
								<form>
									<div class="form-group row">
										<label style="text-align: left" class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" required="">
										</div>
									</div>
									<div class="form-group row">
										<label style="text-align: left" class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="password" required="">
										</div>
									</div>
							</div>
							<div class="form-group row">
								<label style="text-align: left" class="col-sm-2 col-form-label">Role Id</label>
								<div class="col-sm-10">
									<select class="form-control" name="role_id" required>
												<option value="1">administrator</option>
												<option value="6">operator</option>
												<option value="7">user</option>
											</select>
								</div>
							</div>
							<div style="text-align: right" class="col-sm-12">
								<button class="btn btn-primary">Simpan</button>
							</div>
			</form>
		</div>
	</div>
</div>
</div>
</form>