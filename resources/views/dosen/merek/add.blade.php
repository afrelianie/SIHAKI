<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Merek')
    @section('judul3', 'Tambah Pengajuan Merek')

<form action="{{url('pegawai-merek/add')}} " method="POST" enctype="multipart/form-data">
     <input type="hidden" name="id_pegawai" value="{{ Auth::user()->id }}">
    @csrf
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama Merek</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Nama Merek" name="nama_merek">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Jenis Merek</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Jenis Merek" name="jenis">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Foto Merek</label>
                    <input id="inputText3" type="file" class="form-control" placeholder="Foto Merek" name="foto_merek">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Upload Foto TTD</label>
                    <input id="inputText3" type="file" class="form-control" placeholder="Upload Tanda Tangan" name="foto_ttd">
                </div>
            </div>
        </div>



    </div>
    <div class="card-footer text-right">
        <a href="{{ url('pegawai/merek')  }}" class="btn btn-secondary">BATAL</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>


</div>
</form>

</x-dosen>
