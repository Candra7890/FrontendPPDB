@extends('layouts.headerfooter')

@section('title', 'PPDB')

@section('content')

<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle" style="color: #FFFFFF;">Ingin Mengetahui Lebih Cepat dan Terkini Mengenai Info PPDB?</span>
                        <h2 style="color: #FFFFFF;">Silahkan Terus Pantengin Berita PPDB disini!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daya Tampung Sekolah</h2>
    <p class="text-center mb-5">Halaman ini menyediakan informasi terkait daya tampung tiap sekolah di Kabupaten Tabanan untuk membantu calon siswa dan orang tua dalam memilih sekolah yang sesuai dalam proses PPDB,
                                Mohon untuk menggunakan tabel yang telah disediakan dibawah untuk mencari informasi beserta data yang telah tersedia.</p>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="jenjang">Jenjang:</label>
                <select class="form-control" id="jenjang">
                    <option>-- Pilih Jenjang --</option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="jalur_masuk">Jalur Masuk:</label>
                <select class="form-control" id="jalur_masuk">
                    <option>-- Pilih Jalur Masuk --</option>
                    <option>Reguler</option>
                    <option>PPDB</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="wilayah">Wilayah:</label>
                <select class="form-control" id="wilayah">
                    <option>-- Pilih Wilayah --</option>
                    <option>Wilayah 1</option>
                    <option>Wilayah 2</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary mt-4">Cari</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Daya Tampung</th>
                            <th>Jalur Masuk</th>
                            <th>Wilayah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sekolah A</td>
                            <td>100</td>
                            <td>Reguler</td>
                            <td>Wilayah 1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sekolah B</td>
                            <td>120</td>
                            <td>PPDB</td>
                            <td>Wilayah 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection