@extends('layouts.app')

@section('title', 'Data Kabupaten')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Kabupaten
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
                            <th>Kabupaten</th>
                            <th>Provinsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kabupatens as $kabupaten)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kabupaten->kabupaten_nama }}</td>
                                <td>{{ $kabupaten->M_provinsi->provinsi_nama }}</td>
                                <td>
                                    <button data-toggle="modal" class="btn btn-sm btn-warning"
                                        data-target="#edit-form{{ $kabupaten->kabupaten_id }}"><i
                                            class="fas fa-edit"></i></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('kabupaten.destroy', $kabupaten) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="kabupaten_id" value="{{ $kabupaten->kabupaten_id }}">
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
                            <form method="POST" action="{{ route('kabupaten.store') }}" class="form-barang"
                                name="form-store" id="form-store">
                                @csrf
                                <div class="form-group">
                                    <label for="kabupaten_nama">
                                        Nama Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten_nama" name="kabupaten_nama">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi_id">Nama Provinsi</label>
                                    <select name="provinsi_id" id="provinsi_id" class="form-control">
                                        @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->provinsi_id }}">{{ $provinsi->provinsi_nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="form-store">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    @foreach ($kabupatens as $kabupaten)
        <div class="modal fade" id="edit-form{{ $kabupaten->kabupaten_id }}" tabindex="-1" role="dialog">
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
                                <form method="POST" action="{{ route('kabupaten.update', $kabupaten) }}"
                                    class="form-barang" name="form-update{{ $kabupaten->kabupaten_id }}"
                                    id="form-update{{ $kabupaten->kabupaten_id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="kabupaten_nama">
                                            Nama Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten_nama" name="kabupaten_nama"
                                            value="{{ $kabupaten->kabupaten_nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_id">Nama Provinsi</label>
                                        <select name="provinsi_id" id="provinsi_id" class="form-control">
                                            @foreach ($provinsis as $provinsi)
                                                <option value="{{ $provinsi->provinsi_id }}"
                                                    @if ($provinsi->provinsi_id == $kabupaten->provinsi_id) selected @endif>
                                                    {{ $provinsi->provinsi_nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary"
                            form="form-update{{ $kabupaten->kabupaten_id }}">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
