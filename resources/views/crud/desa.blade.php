@extends('layouts.app')

@section('title', 'Data Desa')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Desa
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
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($desas as $desa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $desa->desa_nama }}</td>
                                <td>{{ $desa->M_kecamatan->kecamatan_nama }}</td>
                                <td>
                                    <button data-toggle="modal" class="btn btn-sm btn-warning"
                                        data-target="#edit-form{{ $desa->desa_id }}"><i
                                            class="fas fa-edit"></i></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('desa.destroy', $desa) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="desa_id" value="{{ $desa->desa_id }}">
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
                            <form method="POST" action="{{ route('desa.store') }}" class="form-barang"
                                name="form-store" id="form-store">
                                @csrf
                                <div class="form-group">
                                    <label for="desa_nama">
                                        Nama Desa</label>
                                    <input type="text" class="form-control" id="desa_nama" name="desa_nama">
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan_id">Nama kecamatan</label>
                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                                        @foreach ($kecamatans as $kecamatan)
                                            <option value="{{ $kecamatan->kecamatan_id }}">{{ $kecamatan->kecamatan_nama }}
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
    @foreach ($desas as $desa)
        <div class="modal fade" id="edit-form{{ $desa->desa_id }}" tabindex="-1" role="dialog">
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
                                <form method="POST" action="{{ route('desa.update', $desa) }}"
                                    class="form-barang" name="form-update{{ $desa->desa_id }}"
                                    id="form-update{{ $desa->desa_id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="desa_nama">
                                            Nama Desa</label>
                                        <input type="text" class="form-control" id="desa_nama" name="desa_nama"
                                            value="{{ $desa->desa_nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_id">Nama kecamatan</label>
                                        <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                                            @foreach ($kecamatans as $kecamatan)
                                                <option value="{{ $kecamatan->kecamatan_id }}"
                                                    @if ($kecamatan->kecamatan_id == $desa->kecamatan_id) selected @endif>
                                                    {{ $kecamatan->kecamatan_nama }}</option>
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
                            form="form-update{{ $desa->desa_id }}">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
