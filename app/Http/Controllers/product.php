<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class product extends Controller
{
    //
    public function product(){
        $produk = DB::select('select * from PRODUK, PENCATATAN_STOK where PENCATATAN_STOK.DELETE_STATUS = 0 AND PRODUK.ID_PRODUK = PENCATATAN_STOK.ID_PRODUK ');
        return view('product2')->with('product', $produk);

    }
    public function produkkota($kota){
        $produk = DB::select('select * from PRODUK, PENCATATAN_STOK where PENCATATAN_STOK.WAREHOUSE_ASAL = :kota AND PENCATATAN_STOK.DELETE_STATUS = 0 AND PRODUK.ID_PRODUK = PENCATATAN_STOK.ID_PRODUK ',["kota"=>$kota]);
        return view('product2')->with('product', $produk);

    }

}
