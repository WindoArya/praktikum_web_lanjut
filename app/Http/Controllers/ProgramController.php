<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function prog1(){
        return redirect('https://www.educastudio.com/program/karir');
    }

    public function prog2(){
        return redirect('https://www.educastudio.com/program/magang');
    }

    public function prog3(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }
}
