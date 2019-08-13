
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
  <title>PEP BANDUNG | Tenaga Kerja Administrasi Metalurgi</title>
  <meta name="description" content="Initialized with local json data">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- begin css -->
  <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
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

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
      <div class="kt-subheader__main" style="justify-content: flex-end;">
        <h3 class="kt-subheader__title"> Tenaga Kerja Administrasi Metalurgi </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTKA_Metalurgi">Tambah Data
          </button>
          <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        </div>
        <div class="kt-portlet__head-toolbar">
          <div class="kt-portlet__head-wrapper">
            <a href="/datatka_metalurgi" class="btn btn-clean btn-icon-sm">
              <i class="la la-long-arrow-left"></i>
              Kembali
            </a>
          </div>
        </div>
      </div>                                 
    </div>
    <!-- end:: Subheader -->


    <!-- <link href="{{ asset('assetss/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> -->

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

          <div class="portlet light portlet-fit">
            <div class="portlet-body table-scrollable" >
              <table class="table table-striped table-hover table-bordered table-sm jquery-datatables" cellspacing="0" width="100%">
                <thead>
                  <tr>
                   <th> No</th>
                   <th> Kode</th>
                   <th> Nama </th>
                   <th> Identitas </th>
                   <th> Tanggal Lahir </th>
                   <th> Pendidikan Tinggi & Bidang Keahlian </th>
                   <th> Opsi </th>
                 </tr>
               </thead>
               <tbody>
                @php
                $i = 1;
                @endphp

                @foreach ($dataTKA_Metalurgi as $m)
                <tr>
                  <td>{{ $m->id_tka_metalurgi }}</td>
                  <td>{{ $m->kd_tka_metalurgi }}</td>
                  <td>{{ $m->namatka_metalurgi }}</td>
                  <td>{{ $m->identitastka_metalurgi }}</td>
                  <td>{{ $m->tltka_metalurgi}}</td>
                  <td>{{ $m->pendidikantka_metalurgi}}</td>
                  <td>
                    <span>
                     <a href="/datatka_metalurgi/{{$m->id_tka_metalurgi}}/show" title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md kt-demo-icon__preview" >
                      <i class="flaticon-visible"></i>
                      
                      <a href="/datatka_metalurgi/{{$m->id_tka_metalurgi}}/edit" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">              
                        <i class="la la-edit"></i>
                        
                        <a href="/datatka_metalurgi/{{$m->id_tka_metalurgi}}/delete" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                          <i class="la la-trash"></i>     
                        </span>
                      </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="addTKA_Metalurgi" tabindex="-1" role="dialog" aria-labelledby="addTKA_MetalurgiTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="addTKA_MetalurgilableTitle">Tambah Data Tenaga Kerja Administrasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <form action="/datatka_metalurgi/create" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         <div class="form-group">
           <div class="form-group {!! $errors->has('kd_tka_metalurgi') ? 'has-error' : '' !!}">
            <label for="kd_tka_metalurgi">Kode tka metalurgi</label>
            <input name="kd_tka_metalurgi" type="text" class="form-control" value="{{ $notka_metalurgi }}">
            {!! $errors->first('kd_tka_metalurgi', '<p class="help-block">:message</p>') !!}
          </div>

          <label for="exampleInputEmail1">Nama</label>
          <input name="namatka_metalurgi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" required>

          <label for="exampleInputEmail1">Identitas</label>
          <input name="identitastka_metalurgi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Identitas" required>

          <label for="exampleInputEmail1">Tanggal Lahir</label>
          <input name="tltka_metalurgi" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal lahir" NULL>


          <label for="exampleInputEmail1">Pendidikan Tinggi & Bidang Keahlian</label>
          <input name="pendidikantka_metalurgi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pendidikan tinggi & bidang keahlian" required>

        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
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

