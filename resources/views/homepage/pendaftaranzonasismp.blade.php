@extends('layouts.headerfooter')

@section('title', 'Pendaftaran Zonasi SMP')

@section('content')

<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Ingin Segera Masuk Sekolah Impian Kalian?</span>
                        <h2>Yuk Langsung Isi Formulir Pendaftaran Dibawah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="col-xl-12">
    <div class="col-12">
        <div class="announcement-box" style="background-color: #b2e8d6; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <div class="d-flex align-items-center">
                <i class="fas fa-scroll fa-2x me-3"></i> 
                <h3 class="mb-0">Pemberitahuan Penting</h3>
            </div>
            <div>
                <p class="mb-0">Pendaftaran akan ditutup pada tanggal 16 Juni 2024</p>
            </div>
        </div>
        <div class="announcement-box" style="background-color: #add8e6; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <div class="d-flex align-items-center">
                <i class="fas fa-list fa-2x me-3"></i>
                <h3 class="mb-0">Panduan Pendaftaran</h3>
            </div>
            <div>
                <p class="mb-0">- Isi semua data diri dengan benar</p>
                <p class="mb-0">- Masukkan file sesuai dengan perintah</p>
                <p class="mb-0">- Maksimal ukuran file yang diupload 1MB/file</p>
            </div>
        </div>
    </div>
</div>

    <div class="custom-accordion">
        <div class="card">
            <a href="#personal-data" class="text-dark" data-bs-toggle="collapse">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-3"> <i class="uil uil-receipt text-primary h2"></i> </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                            <p class="text-muted text-truncate mb-0">NISN, NIK, Nama, Jenis Kelamin, Pas
                                Photo, TTL, dsb</p>
                        </div>
                        <div class="flex-shrink-0"> <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                    </div>
                </div>
            </a>
            <div id="personal-data" class="collapse show">
                <div class="p-4 border-top">
                    <div class="row">
                        <!-- Hidden input fields -->
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="personal-data-nisn">NISN</label>
                                <input type="text" class="form-control" id="personal-data-nisn" name="nisn" placeholder="Masukkan NISN" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="personal-data-nik">NIK</label>
                                <input type="text" class="form-control" id="personal-data-nik" name="nik" placeholder="Masukkan NIK" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="personal-data-name">Nama</label>
                                <input type="text" class="form-control" id="personal-data-name" name="nama" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="personal-data-gender">Jenis Kelamin</label>
                                <select class="form-control wide" name="jk" required>
                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="personal-data">Agama</label>
                                <select class="form-control wide" name="agama" required>
                                    <option disabled selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 mb-4">
                                <label class="form-label">Tempat lahir</label>
                                <input type="text" class="form-control" id="basicpill" name="tempatlahir" placeholder="Masukkan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="billing-city">Tanggal lahir</label>
                                <input type="date" class="form-control" id="basicpill" name="tanggallahir" placeholder="Masukkan Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="zip-code">Pas Photo</label>
                                <div class="input-group">
                                    <span class="input-group-text">Upload</span>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input form-control" name="foto" accept="image/png, image/jpg, image/jpeg" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="billing-address">Alamat</label>
                        <textarea class="form-control" id="billing-address" rows="3" name="alamat" required placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="personal-data-nisn">Email</label>
                                <input type="email" class="form-control" id="personal-data-nisn" name="email" placeholder="Masukkan email" required readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 mb-4">
                                <label class="form-label" for="personal-data-nik">No Hp/WhatsApp</label>
                                <input type="number" class="form-control" id="basicpill" name="nohp" placeholder="Masukkan nomor telepon" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <a href="#registration-data" class="collapsed text-dark" data-bs-toggle="collapse">
        <div class="p-4">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3"> <i class="uil uil-truck text-primary h2"></i> </div>
                <div class="flex-grow-1 overflow-hidden">
                    <h5 class="font-size-16 mb-1">Data Pendaftaran</h5>
                    <p class="text-muted text-truncate mb-0">Pilihan sekolah </p>
                </div>
                <div class="flex-shrink-0"> <i class="mdi mdi-chevron-up
                accor-down-icon font-size-24"></i> </div>
            </div>
        </div>
    </a>
    <div id="registration-data" class="collapse">
        <div class="p-4 border-top">
            <div class="mb-4">
                <label class="form-label" for="billing-address">Gelombang</label>
                <select class="form-control wide" name="gelombang" required>
                </select>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nisn">Pilihan 1</label>
                        <input class="form-control" list="datalistOptionsSekolah" id="exampleDataList"
                            placeholder="Pilih sekolah" name="pil1" required>
                        <datalist id="datalistOptionsSekolah">
                        </datalist>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nik">Pilihan 2</label>
                        <input class="form-control" list="datalistOptionsSekolah" id="exampleDataList"
                            placeholder="Pilih sekolah" name="pil2" required>
                        <datalist id="datalistOptionsSekolah">
                        </datalist>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <a href="#parental-data" class="collapsed text-dark" data-bs-toggle="collapse">
        <div class="p-4">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3"> <i class="uil uil-bill text-primary h2"></i> </div>
                <div class="flex-grow-1 overflow-hidden">
                    <h5 class="font-size-16 mb-1">Data Orang Tua</h5>
                    <p class="text-muted text-truncate mb-0">Data orang tua, keuangan dan data. </p>
                </div>
                <div class="flex-shrink-0"> <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
            </div>
        </div>
    </a>
    <div id="parental-data" class="collapse">
        <div class="p-4 border-top">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-name">Nama Ayah</label>
                        <input type="text" class="form-control" id="personal-data-name" name="ayah"
                            placeholder="Masukkan Nama Ayah" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-gender">Pekerjaan Ayah</label>
                        <input class="form-control" list="datalistOptionsOccupation" id="exampleDataList"
                            placeholder="Masukkan Jenis Pekerjaan..." name="pekerjaanayah"
                            required>
                        <datalist id="datalistOptionsOccupation">
                            <!-- Data Pekerjaan -->
                        </datalist>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nik">No HP Ayah</label>
                        <input type="number" class="form-control" id="personal-data-no" name="noayah"
                            placeholder="Masukkan Telepon Ayah" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-name">Nama Ibu</label>
                        <input type="text" class="form-control" id="personal-data-name" required name="ibu"
                            placeholder="Masukkan Nama Ibu">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-gender">Pekerjaan Ibu</label>
                        <input class="form-control" list="datalistOptionsOccupation" id="exampleDataList"
                            placeholder="Cari Pekerjaan Ibu.." name="pekerjaanibu" required>
                        <datalist id="datalistOptionsOccupation">
                            <!-- Data Pekerjaan -->
                        </datalist>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nik">No Telepon Ibu</label>
                        <input type="number" class="form-control" id="personal-data-no" name="noibu"
                            placeholder="Masukkan Telepon Ibu" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nisn">Penghasilan Ayah</label>
                        <select class="form-control wide" title="Recipient" name="penghasilan_ayah" required>
                            <option value="" disabled selected>Pilih gaji</option>
                            <option value="< 1.000.000"> < 1.000.000</option>
                            <option value="1.000.000 - 2.500.000">1.000.000 - 2.500.000</option>
                            <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                            <option value="5.000.000 - 7.500.000">5.000.000 - 7.500.000</option>
                            <option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000</option>
                            <option value="> 10.000.000"> > 10.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nisn">Penghasilan Ibu</label>
                        <select class="form-control wide" title="Recipient" name="penghasilan_ibu" required>
                            <option value="" disabled selected>Pilih gaji</option>
                            <option value="< 1.000.000"> < 1.000.000</option>
                            <option value="1.000.000 - 2.500.000">1.000.000 - 2.500.000</option>
                            <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                            <option value="5.000.000 - 7.500.000">5.000.000 - 7.500.000</option>
                            <option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000</option>
                            <option value="> 10.000.000"> > 10.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 mb-4">
                        <label class="form-label" for="personal-data-nisn">Berkas Orang Tua <small>kk,slip gaji</small></label>
                        <div class="input-group">
                            <span class="input-group-text">Upload</span>
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="ftberkas_ortu" accept="application/pdf" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
   
<a href="#school-data" class="collapsed text-dark" data-bs-toggle="collapse">
    <div class="p-4">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0 me-3">
                <i class="uil uil-truck text-primary h2"></i>
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <h5 class="font-size-16 mb-1">Data sekolah asal dan nilai</h5>
                <p class="text-muted text-truncate mb-0">Sekolah asal, nilai raport dan ijazah</p>
            </div>
            <div class="flex-shrink-0">
                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
            </div>
        </div>
    </div>
</a>
<div id="school-data" class="collapse">
    <div class="p-4 border-top">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mb-4">
                    <label class="form-label" for="billing-address">Nama Sekolah</label>
                    <select name="sekolah" class="form-control" id="">
                        <!-- Options for schools -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="mb-3 mb-4">
                    <label class="form-label">Semester 1</label>
                    <input type="number" class="form-control" name="smt1" placeholder="Masukkan Rata Nilai Semester" required>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mb-3 mb-4">
                    <label class="form-label">Semester 2</label>
                    <input type="number" class="form-control" name="smt1" placeholder="Masukkan Rata Nilai Semester" required>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mb-3 mb-4">
                    <label class="form-label">Semester 3</label>
                    <input type="number" class="form-control" name="smt1" placeholder="Masukkan Rata Nilai Semester" required>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mb-3 mb-4">
                    <label class="form-label">Semester 4</label>
                    <input type="number" class="form-control" name="smt1" placeholder="Masukkan Rata Nilai Semester" required>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mb-3 mb-4">
                    <label class="form-label">Semester 5</label>
                    <input type="number" class="form-control" name="smt1" placeholder="Masukkan Rata Nilai Semester" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mb-4">
                    <label class="form-label" for="billing-address">Berkas Siswa</label>
                    <div class="input-group">
                        <span class="input-group-text">Upload</span>
                        <div class="form-file">
                            <input type="file" class="form-file-input form-control" name="ftberkas_siswa" accept="application/pdf" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3 mb-4">
                    <label class="form-label" for="billing-address">Prestasi <small>(jika ada)</small></label>
                    <div class="input-group">
                        <span class="input-group-text">Upload</span>
                        <div class="form-file">
                            <input type="file" class="form-file-input form-control" name="ftprestasi" accept="application/pdf">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="padding: 12px 24px; font-size: 16px; border-radius: 8px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
