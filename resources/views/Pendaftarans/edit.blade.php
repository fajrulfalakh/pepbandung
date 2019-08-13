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
                    Edit
                </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>

        </div>

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">

                        <div class="panel-body">
                            <form action="/pendaftaran/{{$pendaftaran->id_pendaftaran_mhs}}/update" method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email_mhs" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="{{$pendaftaran->email_mhs}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama lengkap" value="{{$pendaftaran->nama_lengkap}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{$pendaftaran->tempat_lahir}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$pendaftaran->tanggal_lahir}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Laki-Laki" @if($pendaftaran->gender == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                        <option value="Perempuan" @if($pendaftaran->gender == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Agama</label>
                                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Islam" @if($pendaftaran->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Kristen Protestan" @if($pendaftaran->agama == 'Kristen Protestan') selected @endif>Kristen Protestan</option>
                                        <option value="Katolik" @if($pendaftaran->agama == 'Katolik') selected @endif>Katolik</option>
                                        <option value="Hindu" @if($pendaftaran->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Buddha" @if($pendaftaran->agama == 'Buddha') selected @endif>Buddha</option>
                                        <option value="Kong Hu Cu" @if($pendaftaran->agama == 'Kong Hu Cu') selected @endif>Kong Hu Cu</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Induk Kependudukan</label>
                                    <input name="no_induk_kependudukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Induk Kependudukan" value="{{$pendaftaran->no_induk_kependudukan}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" class="form-control" id="exampleFormControlSelect1">
                                        <option value="WNI" @if($pendaftaran->kewarganegaraan == 'WNI') selected @endif>WNI</option>
                                        <option value="WNA" @if($pendaftaran->kewarganegaraan == 'WNA') selected @endif>WNA</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis Tinggal</label>
                                    <select name="jenis_tinggal" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Kost" @if($pendaftaran->jenis_tinggal == 'Kost') selected @endif>Kost</option>
                                        <option value="Rumah Orang Tua" @if($pendaftaran->jenis_tinggal == 'Rumah Orang Tua') selected @endif>Rumah Orang Tua</option>
                                        <option value="Rumah Wali" @if($pendaftaran->jenis_tinggal == 'Rumah Wali') selected @endif>Rumah Wali</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alat transportasi</label>
                                    <select name="alat_transportasi" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Sepeda" @if($pendaftaran->alat_transportasi == 'Sepeda') selected @endif>Sepeda</option>
                                        <option value="Sepeda Motor" @if($pendaftaran->alat_transportasi == 'Sepeda Motor') selected @endif>Sepeda Motor</option>
                                        <option value="Mobil" @if($pendaftaran->alat_transportasi == 'Mobil') selected @endif>Mobil</option>
                                        <option value="Angkutan Umum" @if($pendaftaran->alat_transportasi == 'Angkutan Umum') selected @endif>Angkutan Umum</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input name="nomor_telepon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor telepon" value="{{$pendaftaran->nomor_telepon}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Hp</label>
                                    <input name="nomor_hp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor hp" value="{{$pendaftaran->nomor_hp}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">KPS</label>
                                    <select name="kps" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Ada" @if($pendaftaran->kps == 'Ada') selected @endif>Ada</option>
                                        <option value="Tidak Ada" @if($pendaftaran->kps == 'Tidak Ada') selected @endif>Tidak Ada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor KPS</label>
                                    <input name="nomor_kps" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor kps" value="{{$pendaftaran->nomor_kps}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Program Studi</label>
                                    <input name="id_program_studi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#" value="{{$pendaftaran->id_program_studi}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID kelompok Mahasiswa</label>
                                    <input name="id_kelompok_mhs" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#" value="{{$pendaftaran->id_kelompok_mhs}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Registrasi</label>
                                    <input name="no_registrasi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor hp" value="{{$pendaftaran->no_registrasi}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hasil Tes</label>
                                    <input name="hasil_tes" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="hasil" value="{{$pendaftaran->hasil_tes}}">
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
                                <button type="submit" class="btn btn-info lnr lnr-upload">  Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
