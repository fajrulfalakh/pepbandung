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
		<title>PEP BANDUNG | Pendaftaran</title>
		<meta name="description" content="Initialized with local json data">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset ('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset ('assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset ('assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset ('assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset ('assets/media/logos/logo-pep-1.png') }}" />



							<!-- Plugin CSS -->
<link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

<!-- Theme CSS - Includes Bootstrap -->
<link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

<header class="masthead">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
	{{session('sukses')}}
	</div>
@endif
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
									Pendaftaran Mahasiswa
								</h3>
                                &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                                <ul class="-angle-right">
                                <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Data Siswa
                                </button>
                                </ul>
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
											Daftar Mahasiswa
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<a href="/home" class="btn btn-clean btn-icon-sm">
												<i class="la la-long-arrow-left"></i>
												Kembali
											</a>
											&nbsp;


											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>


											      <div class="modal-body">
											        <form action="/pendaftaran/create" method="POST">
											        	{{csrf_field()}}

														  <div class="form-group">
														    <label for="exampleInputEmail1">Email</label>
														    <input name="email_mhs" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
														  </div>
														  <div class="form-group">
                                                          	<label for="exampleInputEmail1">Nama Lengkap</label>
                                               				<input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                                                          </div>
														  <div class="form-group">
															<label for="exampleInputEmail1">Tempat Lahir</label>
															<input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir" NULL>
														  </div>
														  <div class="form-group">
															<label for="exampleInputEmail1">Tanggal Lahir</label>
															<input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" NULL>
														  </div>
														  <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                                            <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                                              <option>Laki-Laki</option>
                                                              <option>Perempuan</option>
                                                            </select>
                                                          </div>
														  <div class="form-group">
                                                          	<label for="exampleInputEmail1">Agama</label>
                                                              <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                                                  <option>Islam</option>
                                                                  <option>Kristen Protestan</option>
                                                                  <option>Katolik</option>
                                                                  <option>Hindu</option>
                                                                  <option>Buddha</option>
                                                                  <option>Kong Hu Cu</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">No Induk Kependudukan</label>
                                                          	<input name="no_induk_kependudukan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Induk" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Kewarganegaraan</label>
                                                            <select name="kewarganegaraan" class="form-control" id="exampleFormControlSelect1">
                                                                <option>WNI</option>
                                                                <option>WNA</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Jenis Tinggal</label>
                                                              <select name="jenis_tinggal" class="form-control" id="exampleFormControlSelect1">
                                                                  <option>Kost</option>
                                                                  <option>Rumah Orang tua</option>
                                                                  <option>Rumah Wali</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Alat Transportasi</label>
                                                              <select name="alat_transportasi" class="form-control" id="exampleFormControlSelect1">
                                                                  <option>Sepeda</option>
                                                                  <option>Sepeda Motor</option>
                                                                  <option>Mobil</option>
                                                                  <option>Angkutan Umum</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Nomor Telepon</label>
                                                          	</text><input name="nomor_telepon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NO Telp" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Nomor Hp</label>
                                                          	<input name="nomor_hp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NO Hp" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlSelect1">KPS</label>
                                                            <select name="kps" class="form-control" id="exampleFormControlSelect1">
                                                              <option>Ada</option>
                                                              <option>Tidak ada</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputEmail1">Nomor KPS</label>
                                                          	<input name="nomor_kps" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor KPS" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Program Studi</label>
                                                          	<input name="id_program_studi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Kelompok Mahasiswa</label>
                                                          	<input name="id_kelompok_mhs" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelompok" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                          	<label for="exampleInputEmail1">Nomor Registrasi</label>
                                                          	<input name="no_registrasi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomer Registrasi" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputEmail1">Hasil Tes</label>
                                                          	<input name="hasil_tes" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hasil" NULL>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Foto Mahasiswa</label>
                                                            <input type="file" name="foto_mhs" class="form-control">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Ijasah dan SKHUN</label>
                                                            <input type="file" name="ijasah_skhun" class="form-control">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">KTP dan KK</label>
                                                            <input type="file" name="ktp_kk" class="form-control">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Surat Keterangan Sehat</label>
                                                            <input type="file" name="surat_keterangan_sehat" class="form-control">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Surat Industri</label>
                                                            <input type="file" name="surat_industri" class="form-control">
                                                          </div>
                                                         </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <button type="submit" class="btn btn-primary" >Submit</button>

											      </div>
											      </form>
											      </div>
											    </div>
											  </div>
											</div>

										</div>
									</div>



								<div class="kt-portlet__body">

									<!--begin: Search Form -->
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Cari.." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Semester:</label>
															</div>
															<div class="kt-form__control">
																<select class="form-control bootstrap-select" id="kt_form_status">
																	<option value="">All</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								</div>

								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-bordered table-hover">
										<thead class="thead-dark">
										<tr>
											<th>Tanggal Pendaftaran</th>

											<th>Nama Mahasiswa</th>

											<th>ID program Studi</th>
											<th>ID Kelompok Mahasiswa</th>
											<th>No. Registrasi</th>
											<th>Hasil Tes</th>

											<th> AKSI </th>
										</tr>
										</thead>
										@foreach($data_pendaftaran as $pendaftaran)
										<tr>
											<td>{{$pendaftaran->tanggal_pendaftaran}}</td>

											<td>{{$pendaftaran->nama_lengkap}}</td>

											<td>{{$pendaftaran->id_program_studi}}</td>
											<td>{{$pendaftaran->id_kelompok_mhs}}</td>
											<td>{{$pendaftaran->no_registrasi}}</td>
											<td>{{$pendaftaran->hasil_tes}}</td>

											<td>
                                                <a href="/pendaftaran/{{$pendaftaran->id_pendaftaran_mhs}}/profile" class="btn btn-warning flaticon-avatar"></a>
                                                <br>
                                                <a href="/pendaftaran/{{$pendaftaran->id_pendaftaran_mhs}}/edit" class="btn btn-warning flaticon-edit"></a>
                                                <br>
                                                <a href="/pendaftaran/{{$pendaftaran->id_pendaftaran_mhs}}/delete" class="btn btn-danger flaticon-delete" onclick="return confirm('yakin data di hapus?')"></a>
                                            </td>

										</tr>
										@endforeach
									</table>

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

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset ('assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset ('assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset ('assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset ('assets/js/demo1/pages/crud/metronic-datatable/base/data-local.js') }}" type="text/javascript"></script>
		<script src="{{ asset ('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset ('assets/js/demo1/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->







