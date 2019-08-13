<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Edit Kategori</h4>
</div>
<form action="{{ route('datakategori.update', $kategori->id_kategori) }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH"> 
    <div class="modal-body">
        <div class="form-group {!! $errors->has('kd_kategori') ? 'has-error' : '' !!}">
            <label for="kd_kategori">Kode Kategori</label>
            <input name="kd_kategori" type="text" class="form-control" readonly value="{{ $kategori->kd_kategori }}">
            {!! $errors->first('kd_kategori', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {!! $errors->has('nama_kategori') ? 'has-error' : '' !!}">
            <label for="nama_kategori">Nama Kategori</label>
            <input name="nama_kategori" type="text" class="form-control" value="{{$kategori->nama_kategori}}">
            {!! $errors->first('nama_kategori', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {!! $errors->has('deskripsi') ? 'has-error' : '' !!}">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" type="textarea" class="form-control" >{{ $kategori->deskripsi }}
            </textarea>
            {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {!! $errors->has('gambar') ? 'has-error' : '' !!}">
            <label for="gambar">Gambar</label><br>
            <input name="gambar" type="file" class="form-control-file" value="{{ $kategori->gambar }}" {{$kategori->file_gambar}}>
            {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>