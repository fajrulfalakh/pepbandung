
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
  <title>PEP BANDUNG | KRS</title>
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
        <img alt="icon" src="./assets/media/icons/kartu.png" width="20px" />
        <h3 class="kt-subheader__title"> KRS (Kartu Rencana Studi)</h3>
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
                <span class="kt-portlet__head-icon">
                  <img alt="icon" src="./assets/media/icons/kartu.png" width="40px" />
                </span>
                <h3 class="kt-portlet__head-title">
                  KRS (Kartu Rencana Studi)
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
                    <th> No</th>
                    <th> Kode MK </th>
                    <th> Nama </th>
                    <th> SKS </th>
                    <th> SMT </th>
                    <th> Ket </th>
                    <th> Kelas </th>
                    <th> Dosen </th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>MK001</td>
                    <td>Bahasa Indonesia</td>
                    <td align="center">3</td>
                    <td align="center">1</td>
                    <td align="center">B</td>
                    <td align="center">A</td>
                    <td align="center">Soleh M,Pd</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>MK002</td>
                    <td>Bahasa Inggris</td>
                    <td align="center">2</td>
                    <td align="center">2</td>
                    <td align="center">B</td>
                    <td align="center">A</td>
                    <td align="center">Wiwik M,Pd</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>MK003</td>
                    <td>Matematika</td>
                    <td align="center">4</td>
                    <td align="center">2</td>
                    <td align="center">B</td>
                    <td align="center">A</td>
                    <td align="center">Supriyadi M,Pd</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
<!-- END EXAMPLE TABLE PORTLET-->
@include('items.footer')
@include('items.cssfooter')
<!-- END PAGE BASE CONTENT -->

