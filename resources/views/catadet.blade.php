@extends('catalog')
@section('')
@endsection
@section('pgtitle','Developer 1')
@section('title2', '- Developer 1')
@section('navigation')
<a href="components_page_header.html" class="breadcrumb-item">Katalog Produk</a>
<span class="breadcrumb-item active">Developer 1</span>
@endsection
@section('catacont')
<div class="card">
	<div class="card-header header-elements-lg-inline">
		<h5 class="card-title">Produk 1</h5>
	</div>

	<div class="nav-tabs-responsive bg-light border-top">
		<ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
			<li class="nav-item"><a href="#course-overview" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Overview</a></li>
			<li class="nav-item"><a href="#course-attendees" class="nav-link" data-toggle="tab"><i class="icon-people mr-2"></i> Product Detail</a></li>
			<li class="nav-item"><a href="#course-schedule" class="nav-link" data-toggle="tab"><i class="icon-calendar3 mr-2"></i> ...</a></li>
		</ul>
	</div>

	<div class="tab-content">
		<div class="tab-pane fade show active" id="course-overview">
			<div class="card-body">
				<div class="row">
					<div class="mr-lg-3 mb-3 mb-lg-0">
						<a href="assets/images/placeholders/cover.jpg" data-popup="lightbox">
							<img src="assets/images/placeholders/cover.jpg" width="940" height="705" alt="">
						</a>
					</div>
					<div class="mr-lg-3 mb-3 mb-lg-0">
						<a href="assets/images/placeholders/cover.jpg" data-popup="lightbox">
							<img src="assets/images/placeholders/cover.jpg" width="180" height="135" alt="">
						</a>
					</div>
				</div>
				<div class="mt-1 mb-4">
					<h6 class="font-weight-semibold">Produk 1</h6>
					<p>Detail Produk Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

				
			</div>
		</div>

		<div class="tab-pane fade" id="course-attendees">
			<div class="card-body">
			</div>
		</div>

		<div class="tab-pane fade" id="course-schedule">
			<div class="card-body">
				<div class="schedule"></div>
			</div>
		</div>
	</div>
</div>
@endsection