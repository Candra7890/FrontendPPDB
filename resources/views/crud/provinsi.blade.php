@extends('layouts.app')

@section('title', 'Data Provinsi')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Provinsi
            </h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="#add-form" data-toggle="modal" class ="btn btn-primary modal-tambah">Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Provinsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($provinsis as $provinsi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $provinsi->provinsi_nama }}</td>
                                <td>
                                    <button data-toggle="modal" class="btn btn-sm btn-warning" data-target="#edit-form{{$provinsi->provinsi_id}}"><i
                                            class="fas fa-edit"></i></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('provinsi.destroy', $provinsi) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="provinsi_id" value="{{ $provinsi->provinsi_id }}">
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Tambah Data -->
    <div class="modal fade" id="add-form" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10">
                            <form method="POST" action="{{ route('provinsi.store') }}" class="form-barang"
                                name="provinsi_form" id="provinsi_form">
                                @csrf
                                <div class="form-group">
                                    <label for="provinsi_nama">
                                        Nama Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi_nama" name="provinsi_nama">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="provinsi_form">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    @foreach ($provinsis as $provinsi)
    <div class="modal fade" id="edit-form{{$provinsi->provinsi_id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10">
                            <form method="POST" action="{{ route('provinsi.update', $provinsi) }}" class="form-barang"
                                name="provinsi_form{{$provinsi->provinsi_id}}" id="provinsi_form{{$provinsi->provinsi_id}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="provinsi_nama">
                                        Nama Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi_nama" name="provinsi_nama" value="{{$provinsi->provinsi_nama}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="provinsi_form{{$provinsi->provinsi_id}}">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
