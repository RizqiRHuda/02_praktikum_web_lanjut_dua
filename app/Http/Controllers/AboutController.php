<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about(){
        return "Nama     : Rizqi Rohmatul Huda" . "<br>" . "NIM       : 2141720264";
    }

}
