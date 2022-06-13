<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class edit extends Controller
{
    //
    //Untuk menampilkan view form editproduct
    public function editproduk(Request $request){
    $edit = DB::select('select * from PENCATATAN_STOK where ID_PENCATATAN = :id', ["id" => $request->idpencatatan]);
    return view('editproduct')->with('edit', $edit);
    }
    //Mengisi value yang akan diisi
    public function edit(Request $request){
        DB::table('PRODUK')
            ->where('ID_PRODUK', '=', $request->idproduk)
            ->update([
                'NAMA_PRODUK' => $request->nama
            ]);
            DB::table('PENCATATAN_STOK')
            ->where('ID_PENCATATAN', '=', $request->idpencatatan)
            ->update([
                'KETERANGAN' => $request->ket
            ]);
        return redirect("/product");

    }
}
