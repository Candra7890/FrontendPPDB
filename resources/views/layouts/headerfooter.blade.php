<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            @yield('title', 'SPMB')
        </title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
                        
        <link href="/topiclist/css/bootstrap.min.css" rel="stylesheet">

        <link href="/topiclist/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/topiclist/css/templatemo-topic-listing.css" rel="stylesheet"> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        
        <link rel="shortcut icon" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" sizes="72x72" href="/topiclist/images/OIP__15_-removebg-preview (1).png">
        <link rel="tabanan-icon" sizes="114x114" href="/topiclist/images/OIP__15_-removebg-preview (2).png">

    </head>
    <body id="top">
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="/topiclist/images/OIP__15_-removebg-preview.png" style="width: 100px; height: 100;">
                        <span style="color: #FFFFFF;">SPMB TABANAN</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
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
                                <a class="nav-link click-scroll" href="/">Pendaftaran</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/dokumen">Persyaratan & Dokumen</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/pengaduan">Pengaduan</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alur SPMB</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/jalursmp">Alur Pendaftaran SPMB SMP</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            
    <main>
        @yield('content')
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
                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2024 Dinas Pendidikan Kabupaten Tabanan
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
