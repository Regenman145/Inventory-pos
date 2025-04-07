<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Barang extends Controller
{
    function tampil()
    {
        return view('barang');
    }
}
