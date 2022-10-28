<x-dosen>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h5>Tambah Anggota</h5>
                <form action="{{ route('anggota_save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Kode anggota</label>
                        <select class="form-control" name="nama">
                            <option value="" holder>Pilih Anggota</option>
                            @foreach ($user as $result)
                            <option value="{{ $result->name }}">{{ $result->name }}</option>                            
                            
                            @endforeach
                        </select><br>
                        {{-- <label for="">Nama Anggota</label>
                        <input type="text" name="nama" class="form-control" id=""><br> --}}
                        <button type="submit" name="hakcipta_id" value="{{ $hakcipta->id }}"
                            class="btn btn-success mb-2"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h5>Anggota</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <h5>Nama Pengaju : {{ $hakcipta->nama }}</h5>
                    Anggota :

                    <div>
                        @foreach ($anggota as $item)
                        <table>
                            <tr>{{ $item->nama }} <a href="{{ route('hakcipta.show', $item->id) }}">detail</a></tr>
                        </table>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-dosen>