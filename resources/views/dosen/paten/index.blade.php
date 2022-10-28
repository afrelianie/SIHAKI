<x-dosen>

@section('judul','SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
@section('judul2','Tabel Paten')
@section('judul3','Formulir Paten')


    @if(count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif
    
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    @endif


    <div class="card">	
    <div class="container">
        <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-6">
                <h5 class="card-header">Tabel Paten</h5>
            </div>
            <div class="col-6"> 		      
                <button type="button" class="btn btn-success float-right" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">Tambah Paten</button>              
            </div>
        </div>	
    </div>
    
        
    <div class="card-body border-top">
    <div class="table-responsive">
    <table class="table table-striped table-bordered first">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kewarganegaraan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Upload</th>
                <th>Action</th>
            </tr>
    </thead>
    
    <tbody>

        <?php $no=1; ?>
        @foreach ($paten as $result )
    
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$result-> name}}</td>
            <td>{{$result-> kewarganegaraan}}</td>
            <td>{{$result-> alamat}}</td>
            <td>{{$result-> email}}</td>
            <td>{{$result-> judul}}</td>
            <td>{{$result-> date}}</td>
            <td> <img src="{{ asset($result->image) }}" width="100px"></td>
            
            <td>
          <a href="{{ route('paten.show',$result->id) }}" class="btn bg-gradient-dark btn-sm">
            <button type="submit" class="btn btn-inverse-info btn-sm btn-block btn btn-sm btn-warning"><i class="fa fa-edit ">Detail & Edit</i></button></a>
          <form action="{{ route('paten.destroy', $result->id) }}" method="POST"
            onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
            @csrf
            @method('delete')
            <a href="" class="btn bg-gradient-dark btn-sm"><button type="submit"
                class="btn btn-inverse-danger btn-sm btn-block btn btn-sm btn-danger"><i
                  class="fa fa-trash ">Hapus</i></button></a>
          </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
            
    </div>
    </div>
    </div>
    
   

<!-- Modal Scrollable -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Paten</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-body">     
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                               
                <form action="{{ route('paten.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputText3">Nama</label>
                        <input id="inputText3" type="text" name="name" placeholder="Nama Pemohon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputText3">Kewarganegaraan</label>
                        <input id="inputText3" type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputText3">Alamat</label>
                        <input id="inputText3" type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputText3">Judul Invasi</label>
                        <input id="inputText3" type="text" name="judul"placeholder="Judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan <small class="text-muted">dd/mm/yyyy</small></label>
                        <input type="date" class="form-control date-inputmask" id="date-mask" name="date">
                    </div>
                    <div class="form-group">
                        <label for="inputText3">Upload</label>
                        <input id="inputText3" type="file" name="image"placeholder="File" class="form-control">
                    </div>                                                          
                                                                                              
            </div>
        </div>
    </div>
   

<div class="modal-footer">
    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
    <button class="btn btn-primary">Simpan</button>
</div>
</form> 

</div>
</div>
</div>



</x-dosen>