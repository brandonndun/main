<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class product extends Controller
{
    // //Menampilkan tabel view product
    // public function product(){
    //     $produk = DB::select('select * from PRODUK, PENCATATAN_STOK where PENCATATAN_STOK.DELETE_STATUS = 0 AND PRODUK.ID_PRODUK = PENCATATAN_STOK.ID_PRODUK ORDER BY PRODUK.ID_PRODUK ASC');
    //      return view('product')->with('product', $produk);
 

    // }

    //Untuk memfilter produk di warehouse yang dipilih
    public function produkkota($kota){
        $kota = strtoupper($kota);
        $produk = DB::table($kota)->where('delete_status', 0)->get();
        return view('product')->with('product', $produk)->with('kota', $kota);
    }

}
