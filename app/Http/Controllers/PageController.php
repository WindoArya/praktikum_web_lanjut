<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2041720226 Windo Arya Rizki Ramadhani';
    }

    public function article($id){
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
