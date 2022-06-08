<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insert extends Controller
{
    //
    public function insertproduk(Request $request){
        DB::table('PRODUK')->insert([
            'ID_PRODUK' =>"id_produk",
            'NAMA_PRODUK' => $request->namaproduk,
            'STOCK' => $request->jumlah
        ]);
        DB::table('PENCATATAN_STOK')->insert([
            'ID_PENCATATAN' => $request->id_pencatatan,
            'ID_PRODUK' => "produkid",
            'KETERANGAN' => $request->keterangan,
            'WAREHOUSE_ASAL' => $request->warehouse_asal,
            'JUMLAH' => $request->jumlah,
            'TANGGAL_PENCATATAN' => now()
        ]);
        return redirect("/product2");
    }
}
