@extends('dashboard/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">
	<div class="card-header bg-primary header-elements-inline">
		<h6 class="card-title">Wizard with validation</h6>
	</div>

	<form class="wizard-form steps-validation" action="#" data-fouc>
		<h6>Data Pemilik</h6>
		<fieldset>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Nama: <span class="text-danger">*</span></label>
						<input type="text" name="name" class="form-control">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label>No KTP: <span class="text-danger">*</span></label>
						<input type="text" class="form-control required">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Alamat: <span class="text-danger">*</span></label>
						<input type="text"class="form-control required">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label>No HP:</label>
						<input type="text" name="tel" class="form-control" placeholder="0811-1111-1111" data-mask="0811-1111-1111">
					</div>
				</div>
			</div>
		</fieldset>

		<h6>Detail Unit</h6>
		<fieldset>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<label>Unit:</label>
                                <select name="university-country" class="custom-select">
                                    <option value="Rumah" selected>Rumah</option> 
                                    <option value="Ruko">Ruko</option> 
                                    <option value="Kaveling">Kaveling</option>
                                </select>
                            </div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label>Sertifikat:</label>
                                <select name="university-country" class="custom-select">
                                    <option value="SHM" selected>SHM</option> 
                                    <option value="SHGB">SHGB</option> 
                                    <option value="AJB">AJB</option>
                                </select>
                            </div>
						</div>

						<div class="col-lg-6">
							<label>LB/LT:</label>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
	                                    <input type="text" name="specialization" placeholder="Luas Bangunan" class="form-control">
                                    </div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
	                                   <input type="text" name="specialization" placeholder="Luas Tanah" class="form-control">
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Alamat: <span class="text-danger">*</span></label>
                        <textarea name="spes" rows="2"class="form-control"></textarea>
                    </div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label>Spesifikasi:</label>
                        <textarea name="spes" rows="2"class="form-control"></textarea>
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Harga: <span class="text-danger">*</span></label>
                        <input type="text" name="university"class="form-control">
                    </div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label>Negosiasi:</label>
                        <select name="university-country" class="custom-select">
                            <option value="SHM" selected>Tidak</option> 
                            <option value="SHGB">Ya</option>
                        </select>
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label>Ketentuan: <span class="text-danger">*</span></label>
                        <textarea name="spes" rows="2"class="form-control"></textarea>
                    </div>
				</div>
			</div>

			
		</fieldset>

		<h6>Detail Listing</h6>
		<fieldset>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Nomor Listing: <span class="text-danger">*</span></label>
                        <input type="text" name="university" class="form-control">
                    </div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label>Jenis Listing:</label>
                        <div>
							<div class="custom-control custom-checkbox custom-control-inline">
								<input type="checkbox" class="custom-control-input" id="cc_li_c">
								<label class="custom-control-label" for="cc_li_c">Jual</label>
							</div>

							<div class="custom-control custom-checkbox custom-control-inline">
								<input type="checkbox" class="custom-control-input" id="cc_li_u">
								<label class="custom-control-label" for="cc_li_u">Sewa</label>
							</div>
						</div>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Marketing: <span class="text-danger">*</span></label>
                        <input type="text" name="university" class="form-control">
                    </div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label>Referal:</label>
                        <input type="text" name="university" class="form-control">
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label class="d-block">Gambar:</label>
						<label class="custom-file">
							<input type="file" class="custom-file-input">
							<span class="custom-file-label">Choose file</span>
						</label>
                    </div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<!-- /wizard with validation -->
@endsection