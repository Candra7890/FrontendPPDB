@extends('layouts.app')

@section('title', 'Data Kecamatan')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Kecamatan
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
                            <th>Kecamatan</th>
                            <th>Kabupaten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kecamatans as $kecamatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kecamatan->kecamatan_nama }}</td>
                                <td>{{ $kecamatan->M_kabupaten->kabupaten_nama }}</td>
                                <td>
                                    <button data-toggle="modal" class="btn btn-sm btn-warning"
                                        data-target="#edit-form{{ $kecamatan->kecamatan_id }}"><i
                                            class="fas fa-edit"></i></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('kecamatan.destroy', $kecamatan) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="kecamatan_id" value="{{ $kecamatan->kecamatan_id }}">
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
                            <form method="POST" action="{{ route('kecamatan.store') }}" class="form-barang"
                                name="form-store" id="form-store">
                                @csrf
                                <div class="form-group">
                                    <label for="kecamatan_nama">
                                        Nama Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan_nama" name="kecamatan_nama">
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten_id">Nama Kabupaten</label>
                                    <select name="kabupaten_id" id="kabupaten_id" class="form-control">
                                        @foreach ($kabupatens as $kabupaten)
                                            <option value="{{ $kabupaten->kabupaten_id }}">{{ $kabupaten->kabupaten_nama }}
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
    @foreach ($kecamatans as $kecamatan)
        <div class="modal fade" id="edit-form{{ $kecamatan->kecamatan_id }}" tabindex="-1" role="dialog">
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
                                <form method="POST" action="{{ route('kecamatan.update', $kecamatan) }}"
                                    class="form-barang" name="form-update{{ $kecamatan->kecamatan_id }}"
                                    id="form-update{{ $kecamatan->kecamatan_id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="kecamatan_nama">
                                            Nama Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan_nama" name="kecamatan_nama"
                                            value="{{ $kecamatan->kecamatan_nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_id">Nama Kabupaten</label>
                                        <select name="kabupaten_id" id="kabupaten_id" class="form-control">
                                            @foreach ($kabupatens as $kabupaten)
                                                <option value="{{ $kabupaten->kabupaten_id }}"
                                                    @if ($kabupaten->kabupaten_id == $kecamatan->kabupaten_id) selected @endif>
                                                    {{ $kabupaten->kabupaten_nama }}</option>
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
                            form="form-update{{ $kecamatan->kecamatan_id }}">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
