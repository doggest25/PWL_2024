<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function user($name = 'Yoga'){
        return 'Nama saya'.$name;

    }
}


