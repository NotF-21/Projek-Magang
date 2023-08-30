<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome () {
        return view('home');
    }

    public function getHubungi () {
        return view('hubungi');
    }

    public function getTentang() {
        return view('tentang');
    }

    public function getUGD() {
        return view('layanan.ugd');
    }
}
