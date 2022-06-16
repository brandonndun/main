<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class delete extends Controller
{
    //
    public function deleteproduk(Request $request,$kota){
            DB::table($kota)
            ->where('id_produk', '=', $request->idproduk)
            ->update([
                'delete_status' => 1
            ]);
    return redirect("/produk/".$kota);

    
    }
} 
