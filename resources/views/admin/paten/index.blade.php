@extends('template_admin.home')
@section('judul','Kategori')
@section('sub_judul','Kategori Pengajuan')
@section('content')


<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Formulir Paten</h5>
            <div class="card-body">
                <form action="#" id="basicform" data-parsley-validate="">
                    <div class="form-group">
                        <label for="inputUserName">Nama Pemohon</label>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Nama" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Alamat Lengkap</label>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Alamat Lengkap" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Kewarganegaraan</label>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Kewarganegaraan" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Judul Invasi</label>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Judul" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan <small class="text-muted">dd/mm/yyyy</small></label>
                        <input type="text" class="form-control date-inputmask" id="date-mask" placeholder="">
                    </div>

                    <div class="row">

                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
