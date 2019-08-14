
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
  <title>PEP BANDUNG | Nilai Semester</title>
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
    <link href="{{ asset('assetss/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetss/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sweet-alert/sweetalert.css') }}" rel="stylesheet" type="text/css">


    <script src="{{ asset('assetss/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetss/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetss/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('sweet-alert/sweetalert.min.js') }}"></script>

    <!-- <link href="{{ asset('assetss/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> -->

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
      <div class="kt-subheader__main" style="justify-content: flex-end;">
        <img alt="icon" src="./assets/media/icons/nilai.png" width="20px" />
        <h3 class="kt-subheader__title"> Nilai Semester</h3>
        <span class="kt-subheader__separator kt-hidden"></span>
      </div>                                 
    </div>
    <!-- end:: Subheader -->

    <script>
      $(document).ready(function() {
        $('.jquery-datatables').dataTable();

        $(document.body).on('click', '.js-submit-confirm', function (event) {
          event.preventDefault()
          var $form = $(this).closest('form')
          swal({
            title: "Are you sure?",
            text: "You can not undo this process!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: "Cancel",
            closeOnConfirm: true
          },
          function () {
            $form.submit()
          });
        })
      });
    </script>

    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
      <div class="row">
        <div class="col-md-12">
          <!-- BEGIN EXAMPLE TABLE PORTLET-->

          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
          @endif
          <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
              <div class="kt-portlet__head-label">
                <img src="./assets/media/icons/nilai.png" width="40px" />
                <h3 class="kt-portlet__head-title">
                  Nilai Semester
                </h3>
              </div>
              <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                  <a href="/home" class="btn btn-clean btn-icon-sm">
                    <i class="la la-long-arrow-left"></i>
                    Kembali
                  </a>
                </div>
              </div>
            </div>
            <div class="portlet light portlet-fit bordered">
              <div class="portlet-body table-scrollable">
                <table class="table table-striped table-hover table-bordered jquery-datatables">
                  <tr align="center">
                    <th> Kode MK</th>
                    <th> Nama </th>
                    <th> Nilai Utama </th>
                    <th> Nilai Her </th>
                  </tr>
                  <tr>
                    <td>MK001</td>
                    <td>Bahasa Indonesia</td>
                    <td align="center">92</td>
                    <td align="center">-</td>
                  </tr>
                  <tr>
                    <td>MK002</td>
                    <td>Bahasa Inggris</td>
                    <td align="center">90</td>
                    <td align="center">-</td>
                  </tr>

                  <tr>
                    <td>MK003</td>
                    <td>Matematika</td>
                    <td align="center">87</td>
                    <td align="center">-</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="addPegawai" tabindex="-1" role="dialog" aria-labelledby="addPegawaiTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="addPegawailableTitle">Tambah Data Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <form action="/datapegawai/create" method="POST">
         {{csrf_field()}}
         <div class="form-group {!! $errors->has('gambar') ? 'has-error' : '' !!}">
          <label for="gambar">Gambar</label>
          <input name="gambar" type="file" class="form-control-file">
          {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
         <div class="form-group {!! $errors->has('kd_pegawai') ? 'has-error' : '' !!}">
          <label for="kd_pegawai">Kode pegawai</label>
          <input name="kd_pegawai" type="text" class="form-control" value="">
          {!! $errors->first('kd_pegawai', '<p class="help-block">:message</p>') !!}
        </div>

        <label for="exampleInputEmail1">Nama Pegawai</label>
        <input name="namapegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai" required>


        <label for="exampleInputEmail1">Alamat Pegawai</label>
        <input name="alamatpegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat Pegawai" NULL>


        <label for="exampleInputEmail1">Jabatan</label>
        <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan" required>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Save changes</button>
     </div>
   </div>
 </div>
</div> 
</div>
<!-- END EXAMPLE TABLE PORTLET-->
@include('items.footer')
@include('items.cssfooter')
<!-- END PAGE BASE CONTENT -->

