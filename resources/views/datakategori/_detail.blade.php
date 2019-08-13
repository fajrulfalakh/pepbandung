<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Detail Kategori</h4>
</div>
<div class="modal-body">
    <table>
        <tr>
            <td class="col-md-3">Kode Kategori</td>
            <td class="col-md-9">: {{ $kategori->kd_kategori }}</td>
        </tr>
        <tr>
            <td class="col-md-3">Nama Kategori</td>
            <td class="col-md-9">: {{ $kategori->nama_kategori }}</td>
        </tr>
        <tr>
            <td class="col-md-3">Deskripsi</td>
            <td class="col-md-9">: {{ $kategori->deskripsi }}</td>
        </tr>
        <tr>
            <td class="col-md-3">Gambar</td>
            <td class="col-md-9">: <img src="{{url('uploadgambar')}}/{{$kategori->gambar}}" width="50%"></td>
        </tr>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
</div>