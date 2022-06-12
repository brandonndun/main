<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class reduce1 extends Controller
{
    //
    public function reduce2(Request $request){
       // dd("hola");
       $jumlah = $request -> input('jumlah');
       $idproduk = $request -> input('idproduk');
       $keterangan = $request -> input('keterangan');
       $namaproduk = $request -> input('namaproduk');

       $lalal  = DB::table('PENCATATAN_STOK')
       ->where('ID_PRODUK',$idproduk)
       ->update(['JUMLAH'=>$jumlah,'KETERANGAN' => $keterangan]);
       return back()->with('Data berubah','Update Berhasil');
       //return view ('/product2');
    }
}
