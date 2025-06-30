<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            @yield('title', 'SPMB Tabanan 2025')
        </title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
                        
        <link href="/topiclist/css/bootstrap.min.css" rel="stylesheet">

        <link href="/topiclist/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/topiclist/css/templatemo-topic-listing.css" rel="stylesheet"> 
        
        
        <link rel="shortcut icon" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" sizes="72x72" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" sizes="114x114" href="/topiclist/images/OIP__15_-removebg-preview (2).png">

        <script>
        function redirectToNISN(event) {
            event.preventDefault();
            const nisn = document.getElementById('keyword').value;
            if (nisn) {
                window.location.href = `https://tabanan-frontend.ppdb-online.web.id/ceknisn?nisn=${encodeURIComponent(nisn)}`;
            } else {
                alert('Mohon masukkan nomor NISN!');
            }
        }
        </script>

    </head>
    
    <body id="top">

        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                    <img src="/topiclist/images/OIP__15_-removebg-preview.png" style="width: 100px; height: 100;">
                        <span style="color: #FFFFFF;">SPMB TABANAN</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="https://tabanan-frontend.ppdb-online.web.id" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Pendaftaran</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Persyaratan & Dokumen</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Pengaduan</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alur SPMB</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/jalursmp">Alur Pendaftaran SPMB SMP</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="d-lg-block d-md-block d-sm-block">
                            <a href=" https://tabanan-frontend.ppdb-online.web.id" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Cepat. Aman. Terpadu</h1>

                            <h6 class="text-center" style="color: #FFFFFF;">Situs ini dipersiapkan sebagai pusat informasi dan pengolahan seleksi data siswa peserta SPMB Kabupaten Tabanan Periode 2025 / 2026</h6>

                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search" onsubmit="redirectToNISN(event)">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1"></span>
                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Cek Pendaftaran Dengan NISN ..." aria-label="Search">
                                    <button type="submit" class="form-control" style="background-color: #FF0000;">Cek</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="/topiclist/images/PPDB3.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex" >
                                        <div>
                                            <h5 class="text-white mb-2">SPMB 2025</h5>

                                            <p class="text-white">Apa dari kalian masih bingung dengan apa sih itu istilah SPMB? Yuk mari kita cari tau disini!</p>

                                            <a href="/pengertian" class="btn custom-btn mt-2 mt-lg-3" style="background-color: #FF0000;">Cek Selengkapnya</a>
                                        </div>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="/topiclist/images/hqdefault_live.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Daya Tampung Sekolah</h5>

                                            <p class="text-white">Ingin melihat tentang jumlah daya tampung yang dimiliki oleh tiap sekolah SMP di Kabupaten Tabanan? Mari cek langsung disini!</p>

                                            <a href="/dayatampung" class="btn custom-btn mt-2 mt-lg-3" style="background-color: #FF0000;">Cek Selengkapnya</a>
                                        </div>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="/topiclist/images/ppdb4.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Jadwal Pelaksanaan SPMB 2025</h5>

                                            <p class="text-white">Mari cari tau jadwal serta periode lengkap pelaksanaan SPMB Kabupaten Tabanan 2025 disini!</p>

                                            <a href="/periode" class="btn custom-btn mt-2 mt-lg-3" style="background-color: #FF0000;">Cek Selengkapnya</a>
                                        </div>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">Pendaftaran SPMB 2025</h1>
                        </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">SPMB Jalur Domisili</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">SPMB Jalur Afirmasi</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">SPMB Jalur Mutasi</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">SPMB Jalur Prestasi</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-10 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="/">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div>
                                                            <h5 class="mb-2">SPMB Jalur Domisili</h5>
                                                            <p class="text-black">Mari cek pendaftaran jalur domisili yang sedang berlangsung disini!</p>
                                                        </div>
                                                        <span class="badge bg-advertising rounded-pill ms-auto" style="padding: 5px 30px;">Non Aktif</span>
                                                    </div>

                                                    <img src="/topiclist/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid mt-3" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-10 col-12 mb-4 mb-lg-0">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="https://tabanan-frontend.ppdb-online.web.id/pengumuman">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div>
                                                                <h5 class="mb-2">SPMB Jalur Afirmasi</h5>
                                                                <p class="text-black">Mari cek pendaftaran jalur afirmasi yang sedang berlangsung disini!</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto" style="padding: 5px 30px;">Aktif</span>
                                                        </div>

                                                        <img src="/topiclist/images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid mt-3" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                  <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-10 col-12 mb-4 mb-lg-0">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="https://tabanan-frontend.ppdb-online.web.id/pengumuman">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div>
                                                                <h5 class="mb-2">SPMB Jalur Mutasi</h5>
                                                                <p class="text-black">Mari cek pendaftaran jalur mutasi yang sedang berlangsung disini!</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto" style="padding: 5px 30px;">Aktif</span>
                                                        </div>

                                                        <img src="/topiclist/images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid mt-3" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                  <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-10 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="https://tabanan-frontend.ppdb-online.web.id/pengumuman">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div>
                                                            <h5 class="mb-2">SPMB Jalur Prestasi</h5>
                                                            <p class="text-black">Mari cek pendaftaran jalur prestasi yang sedang berlangsung disini!</p>
                                                        </div>
                                                        <span class="badge bg-advertising rounded-pill ms-auto" style="padding: 5px 30px;">Aktif</span>
                                                    </div>
                                                    <img src="/topiclist/images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid mt-3" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Persyaratan Umum SPMB</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Persyaratan Usia Calon Peserta Didik</h4>

                                        <p class="text-white">Berusia paling rendah 6 tahun pada tanggal 1 Juli 2025 (Untuk Sekolah Dasar) serta berusia paling tinggi 15 (lima belas) tahun pada tanggal 1 Juli 2025 (Untuk Sekolah Menengah Pertama)</p>

                                        <div class="icon-holder">
                                          <i class="bi-calendar"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Persyaratan Akta Kelahiran & Kartu Keluarga</h4>

                                        <p class="text-white">Memiliki Akta Kelahiran yang dikeluarkan oleh pihak yang berwenang serta memiliki Kartu Keluarga Kabupaten Tabanan yang dikeluarkan oleh Dinas Kependudukan dan Pencatatan Sipil Kabupaten Tabanan dengan tanggal cetak pertama maksimal tanggal 20 Juni 2024</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Persyaratan Bukti Kelulusan</h4>

                                        <p class="text-white">Memiliki Ijazah/Surat Keterangan Lulus Sekolah Dasar (khusus calon peserta didik jenjang SMP)</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Persyaratan Keabsahan Dokumen</h4>

                                        <p class="text-white">Membuat Surat Pernyataan Orang Tua/Wali tentang keabsahan dokumen sesuai yang tertera pada Lampiran <a href="https://tinyurl.com/SPMBTabanan2025" class="text-link"> berikut</a></p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Ingin mengetahui lebih jauh tentang apa saja dokumen pendukung SPMB?
                                <a href="/dokumen" class="btn custom-btn custom-border-btn ms-3" >Temukan Disini!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


    <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12">
                            <img src="/topiclist/images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="#" method="post" role="form">
                                <h4 class="mb-4 pb-2">Anda Memiliki Masalah Terkait Pelaksanaan SPMB? Ajukan Disini!</h4>
                                <div class="col-lg-12 col-12">
                                    <a href="/pengaduan" class="btn custom-btn mt-2 mt-lg-3" style="background-color: #FF0000;">Pusat Pengaduan SPMB</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>


    <!-- <section class="news-section section-padding" id="section_6" style="background-color: #f9f9f9; font-family: 'Roboto', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-5" style="color: #000000;">Berita Terbaru PPDB</h2>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="news-item p-4 mb-4" style="border-radius: 30px 10px 30px 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #ffffff;">
                        <img src="/topiclist/images/hqdefault_live.jpg" alt="Judul Berita Pertama PPDB" class="img-fluid mb-3" style="border-radius: 10px;">
                        <h4 class="mb-4 pb-2" style="color: #FF0000">Judul Berita Pertama</h4>
                        <p class="small" style="color: #666;">Tanggal rilis: 2024-03-13</p>
                        <p style="color: #555;">Ringkasan berita pertama terkait PPDB. Berita ini mencakup update terbaru dari proses penerimaan siswa baru...</p>
                        <a href="/berita"><strong style="color: #FF0000">Baca Selengkapnya..</strong></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="news-item p-4 mb-4" style="border-radius: 30px 10px 30px 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #ffffff;">
                        <img src="/topiclist/images/8323000.jpg" alt="Judul Berita Pertama PPDB" class="img-fluid mb-3" style="border-radius: 10px;">
                        <h4 class="mb-4 pb-2" style="color: #FF0000">Judul Berita Kedua</h4>
                        <p class="small" style="color: #666;">Tanggal rilis: 2024-03-13</p>
                        <p style="color: #555;">Ringkasan berita pertama terkait PPDB. Berita ini mencakup update terbaru dari proses penerimaan siswa baru...</p>
                        <a href="/berita"><strong style="color: #FF0000">Baca Selengkapnya..</strong></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="news-item p-4 mb-4" style="border-radius: 30px 10px 30px 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #ffffff;">
                        <img src="/topiclist/images/Gedung_Sekolah_1.jpg" alt="Judul Berita Pertama PPDB" class="img-fluid mb-3" style="border-radius: 10px;">
                        <h4 class="mb-4 pb-2" style="color: #FF0000">Judul Berita Ketiga</h4>
                        <p class="small" style="color: #666;">Tanggal rilis: 2024-03-13</p>
                        <p style="color: #555;">Ringkasan berita pertama terkait PPDB. Berita ini mencakup update terbaru dari proses penerimaan siswa baru...</p>
                        <a href="/berita"><strong style="color: #FF0000">Baca Selengkapnya..</strong></a>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
</main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img class="mr-2" src="/topiclist/images/OIP__15_-removebg-preview.png" style="width: 100px; height: 100;">
                        <div>
                            <span>SPMB</span><br>
                            <span>TABANAN</span>
                        </div>
                    </a>
                </div>

                    <div class="col-lg-3 col-md-4 col-6" >
                        <h6 class="site-footer-title mb-3" style="color: #FF0000">Disdik Tabanan</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="https://www.google.co.id/maps/place/Dinas+Pendidikan+Kabupaten+Tabanan+%E1%AC%A4%E1%AC%B6%E1%AC%A6%E1%AC%B2%E1%AD%84%E1%AC%A7%E1%AD%82%E1%AC%A6%E1%AD%84%E1%AC%A4%E1%AC%B6%E1%AC%A4%E1%AC%B6%E1%AC%93%E1%AC%A6%E1%AD%84%E1%AC%93%E1%AC%AA%E1%AC%B9%E1%AC%A7%E1%AC%A2%E1%AC%BE%E1%AC%A6%E1%AD%84%E1%AC%A2%E1%AC%A9%E1%AC%A6%E1%AC%A6%E1%AD%84%E1%AD%9F/@-8.5406794,115.1309531,3a,75y,45.43h,92.61t/data=!3m6!1e1!3m4!1ssOwCtaMdvmYji4fqCnCaOg!2e0!7i16384!8i8192!4m6!3m5!1s0x2dd23a50b8ddf961:0x590f056c1de4ba43!8m2!3d-8.5405165!4d115.1309614!16s%2Fg%2F11gd20sz9w?entry=ttu" class="site-footer-link" style="color: #000000">Alamat Kantor</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="https://disdik.tabanankab.go.id/" class="site-footer-link" style="color: #000000">Website Utama</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3" style="color: #FF0000">Call Center</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link" style="color: #000000">
                                (0361) 810796
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:disdik@tabanankab.go.id" class="site-footer-link" style="color: #000000">
                                disdik@tabanankab.go.id
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2025 Dinas Pendidikan Kabupaten Tabanan
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="/topiclist/js/jquery.min.js"></script>
        <script src="/topiclist/js/bootstrap.bundle.min.js"></script>
        <script src="/topiclist/js/jquery.sticky.js"></script>
        <script src="/topiclist/js/click-scroll.js"></script>
        <script src="/topiclist/js/custom.js"></script>
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
    </body>
</html>