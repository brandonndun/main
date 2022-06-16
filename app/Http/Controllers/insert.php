<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insert extends Controller
{
    //
    public function insertproduk(Request $request){
        header("Content-Type: application/json");
        $file = $request->file('foto');
        // $base64 = "data:image/".$file->getClientMimeType().";base64,".base64_encode(file_get_contents($file));
        $base64 = base64_encode(file_get_contents($file));
       
        $idproduk = "SELECT NAMA_PRODUK, ID_PRODUK FROM PRODUK WHERE NAMA_PRODUK='".$request->nama_produk."';";
        DB::table('PRODUK')->insert([
            'NAMA_PRODUK' => $request->nama_produk,
            'FOTO_PRODUK' => base64_decode($base64)
        ]);
        $runidproduk = DB::select($idproduk);

        DB::table('PENCATATAN_STOK')->insert([
            'ID_PRODUK' => $runidproduk[0]->ID_PRODUK,
            'KETERANGAN' => $request->keterangan,
            'WAREHOUSE_ASAL' => $request->warehouse_asal,
            'JUMLAH' => $request->jumlah,
            'TANGGAL_PENCATATAN' => now()
        ]);

        http_response_code(200);
        echo json_encode(array('keterangan' => $request->keterangan));
    }
}
