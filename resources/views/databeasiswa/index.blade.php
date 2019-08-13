
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
  <title>PEP BANDUNG | Beasiswa</title>
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

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
      <div class="kt-subheader__main">
        <h3 class="kt-subheader__title"> Beasiswa </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBeasiswa">Tambah Data
          </button>
          <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        </div>
        <div class="kt-portlet__head-toolbar">
          <div class="kt-portlet__head-wrapper">
            <a href="/databeasiswa" class="btn btn-clean btn-icon-sm">
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
            <div class="portlet-body table-scrollable">
              <table class="table table-striped table-hover table-bordered table-sm jquery-datatables" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Kode</th>
                    <th> Nama Beasiswa </th>
                    <th> Jenis </th>
                    <th> Tanggal Penerima </th>
                    <th> Opsi </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp

                  @foreach ($dataBeasiswa as $m)
                  <tr>
                    <td>{{ $m->id_beasiswa }}</td>
                    <td>{{ $m->kd_beasiswa }}</td>
                    <td>{{ $m->namabeasiswa }}</td>
                    <td>{{ $m->jenisbeasiswa}}</td>
                    <td>{{ $m->tanggalbeasiswa}}</td>
                    <td>
                     <span>
                       <a href="/databeasiswa/{{$m->id_beasiswa}}/show" title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md kt-demo-icon__preview" >
                        <i class="flaticon-visible"></i>

                        <a href="/databeasiswa/{{$m->id_beasiswa}}/edit" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">              
                         <i class="la la-edit"></i>

                         <a href="/databeasiswa/{{$m->id_beasiswa}}/delete" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
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
       <div class="modal fade" id="addBeasiswa" tabindex="-1" role="dialog" aria-labelledby="addBeasiswaTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title" id="addBeasiswalableTitle">Tambah Data Beasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <form action="/databeasiswa/create" method="POST">
           {{csrf_field()}}
           <div class="form-group">
             <div class="form-group {!! $errors->has('kd_beasiswa') ? 'has-error' : '' !!}">
              <label for="kd_beasiswa">Kode beasiswa</label>
              <input name="kd_beasiswa" type="text" class="form-control" value="{{ $nobeasiswa }}">
              {!! $errors->first('kd_beasiswa', '<p class="help-block">:message</p>') !!}
            </div>

            <label for="exampleInputEmail1">Nama Beasiswa</label>
            <input name="namabeasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Beasiswa" required>


            <label for="exampleInputEmail1">Jenis Beasiswa</label>
            <input name="jenisbeasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Beasiswa" NULL>


            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Beasiswa</label>
              <input name="tanggalbeasiswa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal beasiswa" required>
            </div>

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

 <div class="kt-section">
  <p class="kt-section__desc">Basic pagination example:</p>
  <p class="kt-section__content">

    <!--begin: Pagination-->
  </p><div class="kt-pagination  kt-pagination--brand">
    <ul class="kt-pagination__links">
      <li class="kt-pagination__link--first">
        <a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
      </li>
      <li class="kt-pagination__link--next">
        <a href="#"><i class="fa fa-angle-left kt-font-brand"></i></a>
      </li>
      <li>
        <a href="#">...</a>
      </li>
      <li>
        <a href="#">29</a>
      </li>
      <li>
        <a href="#">30</a>
      </li>
      <li>
        <a href="#">31</a>
      </li>
      <li class="kt-pagination__link--active">
        <a href="#">32</a>
      </li>
      <li>
        <a href="#">33</a>
      </li>
      <li>
        <a href="#">34</a>
      </li>
      <li>
        <a href="#">...</a>
      </li>
      <li class="kt-pagination__link--prev">
        <a href="#"><i class="fa fa-angle-right kt-font-brand"></i></a>
      </li>
      <li class="kt-pagination__link--last">
        <a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
      </li>
    </ul>
    <div class="kt-pagination__toolbar">
      <select class="form-control kt-font-brand" style="width: 60px;">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <span class="pagination__desc">
        Displaying 10 of 230 records
      </span>
    </div>
  </div>

  <!--end: Pagination-->
  <p></p>
</div>


