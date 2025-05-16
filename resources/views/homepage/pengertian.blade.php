@extends('layouts.headerfooter')

@section ('title', 'SPMB Tabanan')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/index">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Apa itu SPMB?</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Pengertian mengenai <br> SPMB</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Selengkapnya</a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="/topiclist/images/5197176.jpg" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">Mari Kenali SPMB</h3>

                            <p>Istilah SPMB tentu sudah cukup akrab bagi anda. Apalagi SPMB ini menjadi sangat penting saat kalender pendidikan menjelang tahun ajaran baru karena berkaitan erat dengan institusi pendidikan. Namun jika anda yang masih belum mengenal dan memahami apa itu SPMB anda bisa menyimak informasinya di sini.</p>

                            <p><strong>SPMB singkatan dari sistem penerimaan murid baru</strong>. Adapun jika mengartikannya maka SPMB adalah suatu proses penerimaan peserta didik di sebuah lembaga Pendidikan baik itu yang formal maupun non formal.
                            Pelaksanaan SPMB ini sendiri biasanya setelah ujian kenaikan kelas. Untuk pesertanya berasal dari berbagai tingkat mulai dari PAUD, TK, SD, SMP hingga SMA dan telah memenuhi persyaratan yang ditentukan.</p>


                            <blockquote>
                            Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, kamu dapat mengubah dunia.
                            </blockquote>

                            <div class="row my-4">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="/topiclist/images/pepedebe.jpg" class="topics-detail-block-image img-fluid">
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                    <img src="/topiclist/images/PPDB2.jpg" class="topics-detail-block-image img-fluid">
                                </div>
                            </div>

                            <p>SPMB ini adalah kegiatan wajib dan harus untuk setiap lembaga pendidikan tanpa terkecuali. Pelaksanaan kegiatan ini adalah bentuk dari menjalankan amanah undang-undang dalam mencerdaskan kehidupan bangsa yang tertuang pada pembukaan UUD 1945. 
                            Selain itu kegiatan yang satu ini juga merupakan sebuah ekosistem pendidikan dalam menjaga keberlanjutan generasi peserta didik. Peraturan tentang pelaksanaan SPMB ini juga sudah sangat jelas dimana hal tersebut 
                            bahkan sudah diatur dalam Permendikbud No.51 tahun 2018. Kemudian pada tahun selanjutnya aturan itu disempurnakan dalam Permendikbud No.44 tahun 2019.</p>

                            <p>Untuk Mengetahui mengenai bagaimana sistem pelaksanaan SPMB Kabupaten Tabanan Tahun 2025 ini baik itu berupa mekanisme, alur, persiapan serta persyaratan dokumen, semua informasi tersebut dapat diakses langsung <a href="https://tinyurl.com/PPDBTabanan24" class="text-link"> disini</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>
@endsection