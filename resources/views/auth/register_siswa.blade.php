<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/output.css">
    <title>Register User</title>
</head>

<div class="flex py-10 md:py-20 px-5 md:px-32 bg-gray-200 min-h-screen">
    <div class="flex shadow w-full flex-col-reverse lg:flex-row">
        <div class="w-full lg:w-1/2 bg-white p-10 px-5 md:px-20">
            <h1 class="font-bold text-xl text-gray-700">Halaman Pendaftaran Akun</h1>
            <p class="text-gray-600">Tolong Isi Seluruh Kolom Dibawah Untuk Membuat Akun Anda!</p>
            <form action="" class="mt-10">
                <div class="my-3">
                    <label class="font-semibold" for="email">E-mail</label>
                    <input type="text" placeholder="yourmail@example.com" name="Email" id="email"
                        class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                </div>
                <div class="my-3">
                    <label class="font-semibold" for="password">Password</label>
                    <input type="password" placeholder="password" name="Password" id="password"
                        class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                </div>
                <div class="my-3">
                    <label class="font-semibold" for="password">Konfirmasi Password</label>
                    <input required type="password" placeholder="Konfirmasi Kembali Password" name="konfirmasi_password" id="konfirmasi_password"
                        class="block border-2 rounded-full mt-2 py-2 px-5 w-full">
                </div>
                <div class="my-5">
                    <button type="submit"
                        class="w-full rounded-full bg-blue-400 hover:bg-blue-600 text-white py-2">DAFTARKAN AKUN</button>
                </div>
            </form>
            <span>Sudah punya akun? <a href="" class="text-blue-400 hover:text-blue-600">Login disini.</a></span>
        </div>
        <div class="w-full lg:w-1/2 bg-blue-400 flex justify-center items-center">
            <img src="assets/register.svg" alt="Register Image" class="w-full">
        </div>
    </div>
</div>

<body>

</body>

</html>
