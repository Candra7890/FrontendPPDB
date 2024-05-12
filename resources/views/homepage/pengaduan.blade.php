@extends('layouts.headerfooter')

@section ('title', 'Pengaduan')

@section('content')

<head>
    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<!-- Start Contact section -->
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle" style="color: #FFFFFF;">Menemukan Masalah? Kesulitan? Kejanggalan tentang PPDB?</span>
                        <h2 style="color: #FFFFFF;">Silahkan Langsung Beritahu Kami!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5">
    <h2 class="text-center mb-4">Pengaduan Pelaksanaan PPDB</h2>
    <p class="text-center mb-5">Halaman ini menyediakan informasi terkait hotline pengaduan untuk masyarakat apabila menemukan masalah, pertanyaan maupun Kejanggalan
                                terhadap pelaksanaan PPDB Kabupaten Tabanan Tahun 2024.</p>
    <div class="row">
        <div class="table-responsive">
            <h3 class="text-center mb-4">Hotline PPDB 2024</h3>
            <table class="table table-bordered text-center">
                <thead>
                    <tr style="background-color: #28a745; color: #ffffff;">
                        <th>Cabang Dinas</th>
                        <th>Kabupaten/Kota</th>
                        <th>Nomor Hotline Layanan</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="background-color: #d4edda;">Cadisdik Wilayah I</td>
                        <td style="background-color: #d4edda;">Tabanan</td>
                        <td style="background-color: #d4edda;">0812-4936-9711</td>
                        <td style="background-color: #d4edda;">tabananppdb@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Cadisdik Wilayah II</td>
                        <td>Tabanan</td>
                        <td>0812-1156-1311</td>
                        <td>tabananppdb@gmail.com</td>
                    </tr>
                    <tr>
                        <td style="background-color: #d4edda;">Cadisdik Wilayah III</td>
                        <td style="background-color: #d4edda;">Tabanan</td>
                        <td style="background-color: #d4edda;">0813-8752-3163</td>
                        <td style="background-color: #d4edda;">tabananppdb@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Cadisdik Wilayah IV</td>
                        <td>Tabanan</td>
                        <td>0812-2397-9343</td>
                        <td>tabananppdb@gmail.com</td>
                    </tr>
                    <tr>
                        <td style="background-color: #d4edda;">Cadisdik Wilayah V</td>
                        <td style="background-color: #d4edda;">Tabanan</td>
                        <td style="background-color: #d4edda;">0858-6327-8676</td>
                        <td style="background-color: #d4edda;">tabananppdb@gmail.com</td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>
@endsection
