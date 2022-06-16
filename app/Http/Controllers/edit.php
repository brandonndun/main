<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class edit extends Controller
{
    //
    //Untuk menampilkan view form editproduct
    public function editproduk(Request $request, $kota){
    $edit = DB::table($kota)->where('id_produk', '=', $request->idproduk)->get();
    return view('editproduct')->with('edit', $edit)->with('kota', $kota);
    }
    //Mengisi value yang akan diisi
    public function edit(Request $request, $kota){
        DB::table($kota)
            ->where('id_produk', '=', $request->idproduk)
            ->update([
                'nama_produk' => $request->nama
            ]);
        return redirect("/produk/".$kota);

    }
}
