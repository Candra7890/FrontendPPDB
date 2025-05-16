@extends('layouts.headerfooter')

@section ('title', 'SPMB Tabanan')

@section('content')

<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle" style="color: #FFFFFF;" >Masih Belum Tahu Mulai Kapan Pelaksanaan SPMB Berlangsung?</span>
                        <h2 style="color: #FFFFFF;" >Berikut Merupakan Jadwal Lengkapnya!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="explore-section section-padding" id="section_2">
    <div class="col-12 text-center">
        <h2 class="mb-4">Alur Pelaksanaan SPMB Jenjang SMP</h2>
        <p class="mb-5">Halaman ini menyediakan informasi terkait periode serta jadwal pelaksanaan SPMB setiap jalur di Kabupaten Tabanan tahun 2024.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Jalur Afirmasi</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Jalur Mutasi</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Jalur Prestasi</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Jalur Domisili</button>
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
                            <div class="col-lg-10 col-md-12 mb-8">
                                <div class="custom-block bg-white shadow-lg">
                                    <img src="/topiclist/images/Afirmasi.jpg" class="custom-block-image img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-12 mb-8">
                                <div class="custom-block bg-white shadow-lg">
                                    <img src="/topiclist/images/Mutasi.jpg" class="custom-block-image img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-12 mb-8">
                                <div class="custom-block bg-white shadow-lg">
                                    <img src="/topiclist/images/Prestasi.jpg" class="custom-block-image img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-12 mb-8">
                                <div class="custom-block bg-white shadow-lg">
                                    <img src="/topiclist/images/Domisili.jpg" class="custom-block-image img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection