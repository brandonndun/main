<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class product extends Controller
{
    //
    public function product(){
        $produk = DB::select('select * from PRODUK');
        return view('product2')->with('product', $produk);

    }

}
