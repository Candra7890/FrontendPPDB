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
                                                <tr style="background-color: #c73737; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pendaftaran</td>
                                                <td>Senin-Rabu (10 Juni s.d 12 Juni 2024)</td>
                                                <td>Buka Tgl. 10 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 12 Juni 2024 pukul 13.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Verifikasi</td>
                                                <td>Senin-Rabu (10 Juni s.d 12 Juni 2024) </td>
                                                <td>Buka Tgl. 10 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 12 Juni 2024 pukul 18.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Jumat, 14 Juni 2024</td>
                                                <td>Pukul 08.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Daftar Kembali</td>
                                                <td>Selasa-Kamis (18 Juni s.d 20 Juni 2024)</td>
                                                <td>Buka Tgl. 18 Juni 2024 pukul 08.00 Wita  dan Tutup Tgl. 20 Juni 2024 pukul 13.00 Wita</td>
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
                                                <tr style="background-color: #c73737; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pendaftaran</td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024)</td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Verifikasi </td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024) </td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td> Jumat 7 Juni 2024</td>
                                                <td>Pukul 08.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Daftar Kembali</td>
                                                <td>Selasa-Kamis (18 Juni s.d 20 Juni 2024) </td>
                                                <td>Buka Tgl. 18 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 20 Juni 2024 pukul 13.00 Wita</td>
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
                                                <tr style="background-color: #c73737; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pendaftaran</td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024) </td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Verifikasi</td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024)</td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita  dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Jumat 7 Juni 2024</td>
                                                <td>Pukul 08.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Daftar Kembali</td>
                                                <td>Selasa-Kamis (18 Juni s.d 20 Juni 2024) </td>
                                                <td>Buka Tgl. 18 Juni 2024 pukul 08.00 Wita  dan Tutup Tgl. 20 Juni 2024 pukul 13.00 Wita</td>
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
                                                <tr style="background-color: #c73737; color: #ffffff;">
                                                    <th>Kegiatan</th>
                                                    <th>Hari/Tanggal</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pendaftaran</td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024) </td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita </td>
                                            </tr>
                                            <tr>
                                                <td>Verifikasi</td>
                                                <td>Senin-Rabu (3 Juni s.d 5 Juni 2024) </td>
                                                <td>Buka Tgl. 3 Juni 2024 pukul 08.00 Wita  dan Tutup Tgl. 5 Juni 2024 pukul 13.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Pengumuman</td>
                                                <td>Jumat 7 Juni 2024 </td>
                                                <td>Pukul 08.00 Wita</td>
                                            </tr>
                                            <tr>
                                                <td>Daftar Kembali</td>
                                                <td>Selasa-Kamis (18 Juni s.d 20 Juni 2024) </td>
                                                <td>Buka Tgl. 18 Juni 2024 pukul 08.00 Wita dan Tutup Tgl. 20 Juni 2024 pukul 13.00 Wita </td>
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