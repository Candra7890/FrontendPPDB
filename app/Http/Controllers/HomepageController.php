<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view ('homepage.index');
    }

    public function pengertian()
    {
        return view('homepage.pengertian');
    }

    public function berita()
    {
        return view('homepage.berita');
    }

    public function pengaduan()
    {
        return view('homepage.pengaduan');
    }

    public function dayatampung()
    {
        return view('homepage.dayatampung');
    }

    public function dokumen()
    {
        return view('homepage.dokumen');
    }

    public function periode()
    {
        return view('homepage.periode');
    }

    public function jalursmp()
    {
        return view('homepage.jalursmp');
    }

    public function jalursd()
    {
        return view('homepage.jalursd');
    }

    public function pendaftaranzonasismp()
    {
        return view('homepage.pendaftaranzonasismp');
    }

    public function pendaftaranafirmasismp()
    {
        return view('homepage.pendaftaranafirmasismp');
    }

    public function pendaftaranperpindahansmp()
    {
        return view('homepage.pendaftaranperpindahansmp');
    }

    public function pendaftaranraporprestasismp()
    {
        return view('homepage.pendaftaranraporprestasismp');
    }
}