@extends('layouts.app')

@section('title', 'Data Banjar')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Banjar
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
                            <th>Banjar</th>
                            <th>Desa</th>
                            <th>Lintang</th>
                            <th>Bujur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banjars as $banjar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $banjar->banjar_nama }}</td>
                                <td>{{ $banjar->M_Desa->desa_nama }}</td>
                                <td>{{ $banjar->lintang }}</td>
                                <td>{{ $banjar->bujur }}</td>
                                <td>
                                    <button data-toggle="modal" class="btn btn-sm btn-warning"
                                        data-target="#edit-form{{ $banjar->banjar_id }}"><i
                                            class="fas fa-edit"></i></button>
                                    <form class="d-inline" method="POST" action="{{ route('banjar.destroy', $banjar) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="banjar_id" value="{{ $banjar->banjar_id }}">
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
                            <form method="POST" action="{{ route('banjar.store') }}" class="form-barang" name="form-store"
                                id="form-store">
                                @csrf
                                <div class="form-group">
                                    <label for="banjar_nama">
                                        Nama Banjar</label>
                                    <input type="text" class="form-control" id="banjar_nama" name="banjar_nama">
                                </div>
                                <div class="form-group">
                                    <label for="desa_id">Nama Desa</label>
                                    <select name="desa_id" id="desa_id" class="form-control">
                                        @foreach ($desas as $desa)
                                            <option value="{{ $desa->desa_id }}">{{ $desa->desa_nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lintang">
                                        Lintang</label>
                                    <input type="text" class="form-control" id="lintang" name="lintang">
                                </div>
                                <div class="form-group">
                                    <label for="bujur">
                                        Bujur</label>
                                    <input type="text" class="form-control" id="bujur" name="bujur">
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
    @foreach ($banjars as $banjar)
        <div class="modal fade" id="edit-form{{ $banjar->banjar_id }}" tabindex="-1" role="dialog">
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
                                <form method="POST" action="{{ route('banjar.update', $banjar) }}" class="form-barang"
                                    name="form-update{{ $banjar->banjar_id }}" id="form-update{{ $banjar->banjar_id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="banjar_nama">
                                            Nama Banjar</label>
                                        <input type="text" class="form-control" id="banjar_nama" name="banjar_nama"
                                            value="{{ $banjar->banjar_nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_id">Nama Desa</label>
                                        <select name="desa_id" id="desa_id" class="form-control">
                                            @foreach ($desas as $desa)
                                                <option value="{{ $desa->desa_id }}"
                                                    @if ($desa->desa_id == $banjar->desa_id) selected @endif>
                                                    {{ $desa->desa_nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="lintang">
                                            Lintang</label>
                                        <input type="text" class="form-control" id="lintang" name="lintang" value="{{ $banjar->lintang }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bujur">
                                            Bujur</label>
                                        <input type="text" class="form-control" id="bujur" name="bujur" value="{{ $banjar->bujur }}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary"
                            form="form-update{{ $banjar->banjar_id }}">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
