@extends('layouts.admin')

@section('title')
    Bali Web Project
@endsection

@section('page-level-plugin-css')
    <link href="{{ asset('assetss/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetss/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sweet-alert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page-level-plugin-script')
    <script src="{{ asset('assetss/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetss/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetss/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('sweet-alert/sweetalert.min.js') }}"></script>
@endsection

@section('page-level-script')
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
@endsection

@section('judul')
    Data Kategori
@endsection

@section('menu')
    Master Data
@endsection

@section('submenu')
    Data Kategori
@endsection

@section('maincontent')
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <marquee id="running-text"><p>Selamat Datang di Portal Website Resmi Pusat Pengembangan Sumber Daya Manusia Geologi Mineral dan Batubara</p></marquee>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <button type="button" class="btn green" data-toggle="modal" data-target="#addKategori"> Add New
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <table class="table table-striped table-hover table-bordered jquery-datatables">
                                <thead>
                                <tr>
                                    <th> No</th>
                                    <th> Kode Kategori </th>
                                    <th> Nama Kategori </th>
                                    <th> Deskripsi </th>
                                    <th> Gambar</th>
                                    <th> Opsi </th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp

                                @foreach ($dataKategori as $m)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $m->kd_kategori }}</td>
                                        <td>{{ $m->nama_kategori }}</td>
                                        <td>{{ $m->deskripsi}}</td>
                                        <td>{{ $m->gambar}}</td>
                                        <td>
                                            <span class="tooltips" data-original-title="Detail">
                                                <a href="{{ route('datakategori.show',$m->id_kategori) }}" class="btn btn-sm btn-success btn-sm" data-target="#detailKategori" data-toggle="modal">
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </a>
                                            </span>
                                            <span class="tooltips" data-original-title="Edit">
                                                <a href="{{ route('datakategori.edit',$m->id_kategori) }}" class="btn btn-warning btn-sm" data-target="#editKategori" data-toggle="modal">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </a>
                                            </span>
                                            <span class="tooltips" data-original-title="Delete">
                                                <form method="POST" action="{{ route('datakategori.destroy',$m->id_kategori) }}" style="display: inline;">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {{csrf_field()}}
                                                    <button type="button" class="btn btn-danger btn-sm js-submit-confirm">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                </tbody>
                            </table>

                            <div class="modal fade" id="addKategori" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Tambah Kategori</h4>
                                        </div>
                                        <form action="{{ route('datakategori.store') }}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <div class="form-group {!! $errors->has('kd_kategori') ? 'has-error' : '' !!}">
                                                    <label for="kd_kategori">Kode Kategori</label>
                                                    <input name="kd_kategori" type="text" class="form-control" value="{{ $nokategori }}">
                                                    {!! $errors->first('kd_kategori', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="form-group {!! $errors->has('nama_kategori') ? 'has-error' : '' !!}">
                                                    <label for="nama_kategori">Nama Kategori</label>
                                                    <input name="nama_kategori" type="text" class="form-control" >
                                                    {!! $errors->first('nama_kategori', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="form-group {!! $errors->has('deskripsi') ? 'has-error' : '' !!}">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea name="deskripsi" type="text-area" class="form-control">
                                                        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
                                                    </textarea>
                                                </div> 
                                                <div class="form-group {!! $errors->has('gambar') ? 'has-error' : '' !!}">
                                                    <label for="gambar">Gambar</label>
                                                    <input name="gambar" type="file" class="form-control-file">
                                                    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
 
                            <div id="detailKategori" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-center">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{ asset('assetss/img/loading-spinner-grey.gif') }}" class="loading">
                                            <span> &nbsp;&nbsp;Loading... </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="editKategori" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-center">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{ asset('assetss/img/loading-spinner-grey.gif') }}" class="loading">
                                            <span> &nbsp;&nbsp;Loading... </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
@endsection
