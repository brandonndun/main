<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;
use App\Models\reducecprod1;

class reduce1 extends Controller
{
    //
    public function reduce2(Request $request){
       // dd("hola");
       $jumlah = $request -> input('jumlah');
       $idproduk = $request -> input('idproduk');
       $keterangan = $request -> input('Keterangan');
       $namaproduk = $request -> input('namaproduk');
       $tujuan = $request -> input('Tujuan');

       $lalal  = DB::table('PENCATATAN_STOK')
       ->where('ID_PRODUK',$idproduk)
       ->update(['JUMLAH'=>$jumlah,'KETERANGAN' => $keterangan,'WAREHOUSE_TUJUAN'=>$tujuan]);
       return back()->with('Data berubah','Update Berhasil');
   
    }

    public function details($id, Request $request){

        // $item = reducecprod1::query()->find($id);
        $item = DB::table('PRODUK')
        ->select('ID_PRODUK', 'NAMA_PRODUK')
        ->where('ID_PRODUK','=',$id)
        ->get();
        // dd($item);
        return view ('reduceproduct',[
            "i" => $item
        ]);
    }
}
