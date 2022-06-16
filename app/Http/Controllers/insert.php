<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insert extends Controller
{
    //
    public function insertproduk(Request $request){
        DB::table('PRODUK')->insert([
            'NAMA_PRODUK' => $request->namaproduk 
        ]);
        $idproduk = "SELECT NAMA_PRODUK, ID_PRODUK FROM PRODUK WHERE NAMA_PRODUK='".$request->namaproduk."';";
        $runidproduk = DB::select($idproduk);
        DB::table('PENCATATAN_STOK')->insert([
            'ID_PRODUK' => $runidproduk[0]->ID_PRODUK,
            'KETERANGAN' => $request->keterangan,
            'WAREHOUSE_ASAL' => $request->warehouse_asal,
            'JUMLAH' => $request->jumlah,
            'TANGGAL_PENCATATAN' => now()
        ]);
        return redirect("/product");
    }

    
}
