@extends('dashboard/dashboard')
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
	<li class="nav-item"><a href="{{'primary'}}" class="nav-link rounded-left" data-toggle="tab">Primary</a></li>
	<li class="nav-item"><a href="/" class="nav-link active" data-toggle="tab">Secondary</a></li>
</ul>

<div class="tab-content">
	<div class="tab-pane fade show active" id="solid-rounded-tab2">
		<div class="table-responsive">
			<table class="table text-nowrap">
				<thead>
					<tr>
						<th>Product</th>
						<th class="text-center" style="width: 111px">LB / LT</th>
						<th>Description</th>
						<th style="width: 170px">Price</th>
						<th class="text-center" style="width: 109px">Availability</th>
						<th class="text-center" style="width: 81px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-active table-border-double">
						<td colspan="6">Rolling Hills</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div>
									<a href="#" class="text-default font-weight-semibold">Tipe 1a</a>
									<div class="font-size-sm">
										<span class="badge badge-mark border-slate-400 mr-1"></span>
										<a href="#" data-toggle="modal" data-target="#modal_facility" class="text-muted">Show Facility</a>
									</div>
								</div>
							</div>
						</td>
						<td class="text-center"><span class="text-muted">120 / 160</span></td>
						<td class="col-sm-6 text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</td>
						<td><h6 class="font-weight-semibold mb-0">Rp. 750.000.000</h6></td>
						<td class="text-center"><span class="badge bg-success">4 Unit</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage Media</a>
										<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit Product</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete Product</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div>
									<a href="#" class="text-default font-weight-semibold">Tipe 2a</a>
									<div class="font-size-sm">
										<span class="badge badge-mark border-slate-400 mr-1"></span>
										<a href="#" class="text-muted">Show Facility</a>
									</div>
								</div>
							</div>
						</td>
						<td class="text-center"><span class="text-muted">80 / 160</span></td>
						<td class="col-sm-6 text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</td>
						<td><h6 class="font-weight-semibold mb-0">Rp. 1.000.000.000</h6></td>
						<td class="text-center"><span class="badge bg-danger">0 Unit</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
										<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
										<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr class="table-active table-border-double">
						<td colspan="6">Galuh Mas</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div>
									<a href="#" class="text-default font-weight-semibold">Kayana</a>
									<div class="font-size-sm">
										<span class="badge badge-mark border-slate-400 mr-1"></span>
										<a href="#" class="text-muted">Show Facility</a>
									</div>
								</div>
							</div>
						</td>
						<td class="text-center"><span class="text-muted">30 / 45</span></td>
						<td class="col-sm-6 text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</td>
						<td><h6 class="font-weight-semibold mb-0">Rp. 300.000.000</h6></td>
						<td class="text-center"><span class="badge bg-success">15 Unit</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
										<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
										<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div id="modal_facility" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><i class="icon-pencil7 mr-2"></i> &nbsp;Edit Facility</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="card card-body">
								<div class="d-flex align-items-center">
									<div class="mr-3">
										<span class="badge badge-primary badge-icon"><i class="icon-bed2 icon-2x"></i></span>
									</div>

									<div class="align-middle">
										<h3>Kamar Tidur</h3>
									</div>

									<div class="col-md-5 ml-md-auto">
										<input type="text" value="3" class="form-control touchspin-set-value">
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-body">
								<div class="d-flex align-items-center">
									<div class="mr-3">
										<span class="badge badge-primary badge-icon"><i class="icon-man-woman icon-2x"></i></span>
									</div>

									<div class="align-middle">
										<h3>Kamar Mandi</h3>
									</div>

									<div class="col-md-5 ml-md-auto">
										<input type="text" value="3" class="form-control touchspin-set-value">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card card-body">
								<div class="d-flex align-items-center">
									<div class="mr-3">
										<span class="badge badge-primary badge-icon"><i class="icon-checkbox-partial icon-2x"></i></span>
									</div>

									<div class="align-middle">
										<h3>Luas Bangunan</h3>
									</div>

									<div class="col-md-5 ml-md-auto">
										<input type="text" value="120" class="form-control">
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-body">
								<div class="d-flex align-items-center">
									<div class="mr-3">
										<span class="badge badge-primary badge-icon"><i class="icon-square icon-2x"></i></span>
									</div>

									<div class="align-middle">
										<h3>Luas Tanah</h3>
									</div>

									<div class="col-md-5 ml-md-auto">
										<input type="text" value="160" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-link" data-dismiss="modal"><i class="icon-cross2 font-size-base mr-1"></i> Close</button>
					<button class="btn bg-primary"><i class="icon-checkmark3 font-size-base mr-1"></i> Save</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection