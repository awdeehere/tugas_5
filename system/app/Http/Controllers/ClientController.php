<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller
{

    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('landing.home', $data);
    }

    function showCollection()
    {  
        $data['list_produk'] = Produk::all();
        return view('landing.collect', $data);
    }

}
