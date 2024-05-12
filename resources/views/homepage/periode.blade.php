@extends('layouts.headerfooter')

@section('title', 'PPDB')

@section('content')

<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle" style="color: #FFFFFF;">Masih Belum Tahu Mulai Kapan Pelaksanaan PPDB Berlangsung?</span>
                        <h2 style="color: #FFFFFF;">Berikut Merupakan Jadwal Lengkapnya!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="explore-section section-padding" id="section_2">
        <div class="col-12 text-center">
            <h2 class="mb-4">Jadwal Pelaksanaan PPDB</h1>
            <p class="mb-5">Halaman ini menyediakan informasi terkait periode serta jadwal pelaksanaan PPDB setiap jalur di Kabupaten Tabanan tahun 2024.</p>
        </div>
                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Jalur Zonasi</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Jalur Afirmasi</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Jalur Perpindahan Tugas</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Jalur Rapor dan Prestasi</button>
                            </li>
                        </ul>
                    </div>
                </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="table-responsive">
                                        <h3 class="text-center mb-4">Jadwal PPDB Jalur Zonasi</h3>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr style="background-color: #28a745; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Lokasi</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pengajuan Akun</td>
                                                <td>Online</td>
                                                <td>19 Mei - 14 Juni 2024</td>
                                                <td>24 jam (Ajuan Akun dibuka pukul 08:00 dan ditutup pukul 12:00 di hari terakhir) </td>
                                            </tr>
                                            <tr>
                                                <td>Pendaftaran dan Pemilihan Sekolah</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Pendaftaran hari peratama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Proses Seleksi</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Seleksi pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Ruang Pendaftaran</td>
                                                <td>14 Juni 2024</td>
                                                <td>17:00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Lapor Diri</td>
                                                <td>Sekolah Tujuan</td>
                                                <td>15 - 16 Juni 2024</td>
                                                <td>24 jam (Lapor diri pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                    <div class="table-responsive">
                                        <h3 class="text-center mb-4">Jadwal PPDB Jalur Afirmasi</h3>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr style="background-color: #28a745; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Lokasi</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pengajuan Akun</td>
                                                <td>Online</td>
                                                <td>19 Mei - 14 Juni 2024</td>
                                                <td>24 jam (Ajuan Akun dibuka pukul 08:00 dan ditutup pukul 12:00 di hari terakhir) </td>
                                            </tr>
                                            <tr>
                                                <td>Pendaftaran dan Pemilihan Sekolah</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Pendaftaran hari peratama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Proses Seleksi</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Seleksi pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Ruang Pendaftaran</td>
                                                <td>14 Juni 2024</td>
                                                <td>17:00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Lapor Diri</td>
                                                <td>Sekolah Tujuan</td>
                                                <td>15 - 16 Juni 2024</td>
                                                <td>24 jam (Lapor diri pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                <div class="table-responsive">
                                        <h3 class="text-center mb-4">Jadwal PPDB Jalur Perpindahan Tugas</h3>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr style="background-color: #28a745; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Lokasi</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pengajuan Akun</td>
                                                <td>Online</td>
                                                <td>19 Mei - 14 Juni 2024</td>
                                                <td>24 jam (Ajuan Akun dibuka pukul 08:00 dan ditutup pukul 12:00 di hari terakhir) </td>
                                            </tr>
                                            <tr>
                                                <td>Pendaftaran dan Pemilihan Sekolah</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Pendaftaran hari peratama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Proses Seleksi</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Seleksi pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Ruang Pendaftaran</td>
                                                <td>14 Juni 2024</td>
                                                <td>17:00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Lapor Diri</td>
                                                <td>Sekolah Tujuan</td>
                                                <td>15 - 16 Juni 2024</td>
                                                <td>24 jam (Lapor diri pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                    <div class="table-responsive">
                                        <h3 class="text-center mb-4">Jadwal PPDB Jalur Rapor dan Prestasi</h3>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr style="background-color: #28a745; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Lokasi</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pengajuan Akun</td>
                                                <td>Online</td>
                                                <td>19 Mei - 14 Juni 2024</td>
                                                <td>24 jam (Ajuan Akun dibuka pukul 08:00 dan ditutup pukul 12:00 di hari terakhir) </td>
                                            </tr>
                                            <tr>
                                                <td>Pendaftaran dan Pemilihan Sekolah</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Pendaftaran hari peratama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Proses Seleksi</td>
                                                <td>Online</td>
                                                <td>12 - 14 Juni 2024</td>
                                                <td>24 jam (Seleksi pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Ruang Pendaftaran</td>
                                                <td>14 Juni 2024</td>
                                                <td>17:00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Lapor Diri</td>
                                                <td>Sekolah Tujuan</td>
                                                <td>15 - 16 Juni 2024</td>
                                                <td>24 jam (Lapor diri pada hari pertama dibuka pukul 08:00 dan hari terakhir ditutup pukul 14:00)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection