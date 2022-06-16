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
        $warehouseasal = strtoupper($request->warehouse_asal);
        $produk = DB::select("SELECT NAMA_PRODUK, ID_PRODUK FROM PRODUK;");
        $count = count($produk)+1;
        $id = 'ID';
        if ($count <= 9999 && $count > 9999) {
            $id = $id.$count;
        } elseif ($count <= 999 && $count > 99) {
            $id = $id.'0'.$count;
            # code...
        } elseif ($count <= 99 && $count > 9) {
            $id = $id.'00'.$count;
            # code...
        } else {
            $id = $id.'000'.$count;
        }
        DB::table($warehouseasal)->insert([
            'Warehouse' => $request->warehouse_asal,
            'id_produk' => $id,
            'nama_produk' => $request->nama_produk,
            'stock' => $request->jumlah,
            'foto_produk' => base64_decode($base64),
            'delete_status' => 0
        ]);
        
        http_response_code(200);
        echo json_encode(array('status' => 'ok'));
    }

    
}
