<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
     return "Selamat Datang";
    }

    public function about(){
        return "Nama     : Rizqi Rohmatul Huda" . "<br>" . "NIM       : 2141720264";
    }

    public function articles($id=1){
        return  "Halaman Artikel dengan Id " . $id;
    }
}
