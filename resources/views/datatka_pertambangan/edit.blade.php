<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>

	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="../../../../">

	<!--end::Base Path -->
	<meta charset="utf-8" />
	<title>PEP BANDUNG | Edit Tenaga Kerja Administrasi Pertambangan</title>
	<meta name="description" content="Initialized with local json data">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- begin css -->
	@include('items.css')
	<!-- end css -->
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	@include('items.headermobile')
	<!-- end:: Header Mobile -->
	<!-- begin:: Aside -->
	@include('items.navigation')
	<!-- end:: Aside -->
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

		<!-- begin:: Header -->
		@include('items.header')
		<!-- end:: Header -->

		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

			<!-- begin:: Subheader -->
			<div class="kt-subheader   kt-grid__item" id="kt_subheader">
				<div class="kt-subheader__main">
					<h3 class="kt-subheader__title">
					Edit Tenaga Kerja Administrasi Pertambangan </h3>
					<span class="kt-subheader__separator kt-hidden"></span>
					<div class="kt-subheader__breadcrumbs">
						<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
					</div>
				</div>
				
				
			</div>

			<!-- end:: Subheader -->

			<!-- begin:: Content -->
			<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
				
				<div class="kt-portlet kt-portlet--mobile">
					<div class="kt-portlet__head kt-portlet__head--lg">
						<div class="kt-portlet__head-label">
							<span class="kt-portlet__head-icon">
								<i class="kt-font-brand flaticon2-line-chart"></i>
							</span>
							<h3 class="kt-portlet__head-title">
								Edit Data Tenaga Kerja Administrasi Pertambangan
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<div class="kt-portlet__head-wrapper">
								<a href="/datatka_pertambangan" class="btn btn-clean btn-icon-sm">
									<i class="la la-long-arrow-left"></i>
									Kembali
								</a>
							</div>
						</div>
					</div>
					<div class="kt-portlet__body">
					</div>

					<div class="kt-portlet__body">

						<!--begin: Datatable -->
						
						
						<div class="row">
							<div class="col-lg-8">
								<form action="/datatka_pertambangan/{{$datatka_pertambangan->id_tka_pertambangan}}/update" method="POST">
									{{csrf_field()}}
									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">No</label>
										<input name="id_tka_pertambangan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" value="{{$datatka_pertambangan->id_tka_pertambangan}}" required>
									</div>

									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">Kode tka</label>
										<input name="kd_tka_pertambangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode tka" value="{{$datatka_pertambangan->kd_tka_pertambangan}}" NULL>
									</div>

									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">Nama tka</label>
										<input name="namatka_pertambangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama tka" value="{{$datatka_pertambangan->namatka_pertambangan}}" required>
									</div>

									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">Identitas</label>
										<input name="identitastka_pertambangan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Identitas" value="{{$datatka_pertambangan->identitastka_pertambangan}}" required>
									</div>

									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">Tanggal Lahir</label>
										<input name="tltka_pertambangan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="{{$datatka_pertambangan->tltka_pertambangan}}" required>
									</div>

									<div class="form-group">
										<label class="text-white-75" for="exampleInputEmail1">Pendidikan Tinggi & Bidang Keahlian</label>
										<input name="pendidikantka_pertambangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pendidikan & Bidang Keahlian" value="{{$datatka_pertambangan->pendidikantka_pertambangan}}" NULL>
									</div>

									<button type="submit" class="btn btn-warning">Update</button>
								</form>
							</div>
						</div>
						@if(session('sukses'))
						<div class="alert alert-success" role="alert">
							{{session('sukses')}}
						</div>
						@endif

						<!--end: Datatable -->
					</div>
					<!-- <div class="kt-portlet__body kt-portlet__body--fit"> -->

						<!--begin: Datatable -->
						<!-- <div class="kt-datatable" id="local_data"></div> -->

						<!--end: Datatable -->
						<!-- </div> -->
					</div>
				</div>

				<!-- end:: Content -->
			</div>

			<!-- begin:: Footer -->
			@include('items.footer')
			<!-- end:: Footer -->
		</div>
	</div>
</div>

<!-- end:: Page -->

<!--begin cssfooter -->

@include('items.cssfooter')

<!--end cssfooter -->
</body>

<!-- end::Body -->
