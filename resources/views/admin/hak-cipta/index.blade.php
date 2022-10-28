@extends('template_admin.home')
@section('judul','Kategori')
@section('sub_judul','Kategori Pengajuan')
@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <h5 class="card-header">Formulir Hak Cipta</h5>
                <div class="card-body">
                    <form action="{{ route('hakcipta.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Nama Pemohon</label>
                            <input id="inputText1" name="nama" type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="inputText2">Alamat Lengkap</label>
                            <input id="inputText2" name="alamat" type="text" placeholder="Alamat" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText3">Kewarganegaraan</label>
                            <input id="inputText3" name="kewarganegaraan" type="text" placeholder="Kewarganegaraan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>International Number <small class="text-muted">+62 000 000 000</small></label>
                            <input type="text" name="no_hp" class="form-control international-inputmask" id="international-mask" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Date Mask <small class="text-muted">dd/mm/yyyy</small></label>
                            <input name="date" type="text" class="form-control date-inputmask" id="date-mask" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Upload NPWP</label>
                              <input type="file" name="image" id="" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="inputText3" class="col-form-label">Upload KTP</label>
                              <input type="file" name="image" id="" class="form-control">
                        </div>
                         --}}
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($hakcipta as $asu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $asu->nama }}</td>
                                    <td>
                                        <a href="{{ route('anggota', $asu->id) }}"><button>Tambah Anggota</button></a>
                                        <a href=""><button>lihat</button></a>
                                        <a href=""><button>edit</button></a>
                                        <a href=""><button>hapus</button></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
