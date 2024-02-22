<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function home(){
        return "Selamat Datang";
    }
    public function about(){
        return 'NIM:2241720215 & Nama: AGUSTY LABDANAYOGA';
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}


