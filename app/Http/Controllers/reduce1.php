<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;
use App\Models\reducecprod1;

class reduce1 extends Controller
{
    //
    public function reduce2(Request $request){
       $jumlah = $request -> input('jumlah');
       $idproduk = $request -> input('idproduk');
       $keterangan = $request -> input('Keterangan');
       $namaproduk = $request -> input('namaproduk');
       $tujuan = $request -> input('Tujuan');

       $lalal  = DB::table('PENCATATAN_STOK')
       ->where('ID_PRODUK',$idproduk)
       ->update(['JUMLAH'=>$jumlah,'KETERANGAN' => $keterangan,'WAREHOUSE_TUJUAN'=>$tujuan,'TANGGAL_PENCATATAN'=>date(now())]);
       return back()->with('Data berubah','Update Berhasil');
   
    }

    public function details($id, Request $request){
        $item = DB::table('PRODUK')
        ->select('ID_PRODUK', 'NAMA_PRODUK')
        ->where('ID_PRODUK','=',$id)
        ->get();
      
        return view ('reduceproduct',[
            "i" => $item
        ]);
        return redirect("/product");
    }
}
