
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
  <title>PEP BANDUNG | Matakuliah Geologi</title>
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
            <h3 class="kt-subheader__title"> Matakuliah Geologi </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMatakuliah_geologi">Tambah Data
                </button>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <a href="/datamatakuliah_geologi" class="btn btn-clean btn-icon-sm">
                        <i class="la la-long-arrow-left"></i>
                        Kembali
                    </a>
                </div>
            </div>
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
                <div class="portlet light portlet-fit">
                    <div class="portlet-body table-scrollable">
                        <table class="table table-striped table-bordered jquery-datatables">
                            <thead>
                                <tr>
                                    <th> No</th>
                                    <th> Kode</th>
                                    <th> Nama Matakuliah </th>
                                    <th> Semester </th>
                                    <th> Teori </th>
                                    <th> Praktek </th>
                                    <th> Kerja Lapang </th>
                                    <th> Opsi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp

                                @foreach ($dataMatakuliah_Geologi as $m)
                                <tr>
                                    <td>{{ $m->id_matakuliah_geologi }}</td>
                                    <td>{{ $m->kd_matakuliah_geologi }}</td>
                                    <td>{{ $m->namamatakuliah_geologi }}</td>
                                    <td>{{ $m->semester}}</td>
                                    <td>{{ $m->teori}}</td>
                                    <td>{{ $m->praktek}}</td>
                                    <td>{{ $m->kerjalapang}}</td>
                                    <td>
                                        <span>
                                         <a href="/datamatakuliah_geologi/{{$m->id_matakuliah_geologi}}/show" title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md kt-demo-icon__preview" >
                                            <i class="flaticon-visible"></i>

                                            <a href="/datamatakuliah_geologi/{{$m->id_matakuliah_geologi}}/edit" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">              
                                               <i class="la la-edit"></i>

                                               <a href="/datamatakuliah_geologi/{{$m->id_matakuliah_geologi}}/delete" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
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
           <div class="modal fade" id="addMatakuliah_geologi" tabindex="-1" role="dialog" aria-labelledby="addMatakuliah_geologiTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-scrollable" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="addMatakuliah_geologilableTitle">Tambah Data Matakuliah Geologi</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                        <form action="/datamatakuliah_geologi/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-group {!! $errors->has('kd_matakuliah_geologi') ? 'has-error' : '' !!}">
                                    <label for="kd_matakuliah_geologi">Kode Matakuliah</label>
                                    <input name="kd_matakuliah_geologi" type="text" class="form-control" value="{{ $nomatakuliah_geologi }}">
                                    {!! $errors->first('kd_matakuliah_geologi', '<p class="help-block">:message</p>') !!}
                                </div>

                                <label for="exampleInputEmail1">Nama Matakuliah</label>
                                <input name="namamatakuliah_geologi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Matakuliah" required>
                                <label for="exampleFormControlSelect1">Semester</label>
                                <select name="semester" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>


                                <label for="exampleInputEmail1">Teori</label>
                                <input name="teori" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teori" NULL>

                                <label for="exampleInputEmail1">Praktek</label>
                                <input name="praktek" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Praktek" NULL>

                                <label for="exampleInputEmail1">Kerja Lapang</label>
                                <input name="kerjalapang" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kerja Lapang" NULL>

                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary">Save changes</button>
                           </div>
                       </div>
                   </div>
               </div>

               <div id="detailMatakuliah_geologi" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-center">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/loading-spinner-grey.gif') }}" class="loading">
                            <span> &nbsp;&nbsp;Loading... </span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="editMatakuliah_Goeologi" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-center">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/loading-spinner-grey.gif') }}" class="loading">
                            <span> &nbsp;&nbsp;Loading... </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END EXAMPLE TABLE PORTLET-->
        @include('items.footer')

        @include('items.cssfooter')
        <!-- END PAGE BASE CONTENT -->

