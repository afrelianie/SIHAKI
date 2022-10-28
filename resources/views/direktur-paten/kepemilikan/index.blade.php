<x-app>


@section('judul','Data Kepemilikan')
@section('sub_judul','Tambah Kepemilikan')
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-11">

        <section class="content">
            <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">PERNYATAAN KEPEMILIKAN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>

                    <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><center> No </center></th>
                                <th><center> Judul </center></th>
                                <th><center> Action </center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list_kepemilikan as $item)
                                <tr>
                                    <td><center> {{ $no++ }} </center></td>
                                    <td><center> {{ $item->judul }} </center></td>
                                    <td><center>
                                        <a href="{{ url('direktur-pernyataan-kepemilikan', $item->id) }}"
                                            class="btn btn-info"><i class="fa fa-eye"></i> Lihat Pengalihan</a>
                                    </center></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        </div>
    </div>



</x-app>
