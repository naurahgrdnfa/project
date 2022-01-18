
		<!-- ============================================================== -->
		<!-- Start Page Content here -->
		<!-- ============================================================== -->

		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box">
								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<!-- <li class="breadcrumb-item"><a href="javascript: void(0);">pengguna Berseri</a></li> -->
										<li class="breadcrumb-item"><a href="javascript: void(0);">Data Pengguna</a></li>
									</ol>
								</div>
								<h4 class="page-title">Data Pengguna</h4>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<div class="row">
						<div class="col-12">
							<div class="card-box">
							

								<div class="mb-2">
									<div class="row">
										<div class="col-12 text-sm-center form-inline">
											<div class="form-group mr-2">
												<select id="demo-foo-filter-status" class="custom-select custom-select-sm">
													<option value="">Tampilkan Semua</option>
													<option value="administrator">administrator</option>
													<option value="operator">operator</option>
													<option value="user">user</option>
												</select>
											</div>
											<div class="form-group">
												<input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
											</div>
											<div class="form-group">
											<?php if ($this->session->role_id == 1) { ?>
											<p style="float: right; margin-right:50%;">
									<h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('dashboard/tambah_pengguna') ?>"><button  class="btn btn-primary" type="submit">Tambah Data +</button></a></h6>
									</p><?php } ?>
											</div>
									</div>
								</div>

								<div class="table-responsive">
									<table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
										<thead>
											<tr>
                       							<th>No.</th>
												<th data-toggle="true">Username</th>
												<th>Role Description</th>
												<th>Last Update</th>
                       							<?php if ($this->session->role_id == 1) { ?>
                       							<th>Aksi</th><?php }?>
											</tr>
										</thead>
										<tbody>
                      					<?php $no = 1; foreach ($pengguna as $data): ?>
                        				<tr>
                          						<td><?php echo $no++ ?></td>
  												<td><?php echo $data->username ?></td>
  												<td><?php echo $data->role ?></td>
  												<td><?php echo $data->last_update ?></td>
                            			<td><?php if ($this->session->role_id == 1) { ?>
                            						<a href=" <?php echo base_url('dashboard/edit_pengguna/' .$data->user_id) ?>" button  class="btn btn-success btn-sm btn-edit">
														<i class="fas fa-edit"></i></button>
														&nbsp;
													<a href=" <?php echo base_url('dashboard/hapus_data_pengguna/' .$data->user_id) ?>" button  class="btn btn-sm btn-danger">
														<i class="fas fa-trash"></i></button> </a>


													 <?php }?></td>
                      					<?php endforeach; ?>
                      					</tr>
										</tbody>
										<tfoot>
											<!-- <tr class="active">
												<td colspan="6">
													<div class="text-right">
														<ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
													</div>
												</td>
											</tr> -->
										</tfoot>
									</table>
								</div> <!-- end .table-responsive-->
							 </div> <!-- end card-box -->
						</div> <!-- end col -->
					</div> 
					<!-- end row -->

				</div> <!-- container -->

			</div> <!-- content -->
