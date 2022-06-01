<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class edit extends Controller
{
    //
    public function editproduk($idproduct){
    $edit = DB::select('select * from PRODUK where ID_PRODUK = :id', ["id" => $idproduct]);
    return view('editproduct')->with('edit', $edit);
    }
    public function edit(Request $request,$id){
        DB::table('PRODUK')
            ->where('ID_PRODUK', '=', $id)
            ->update([
                'NAMA_PRODUK' => $request->nama
            ]);
        return redirect("/product2");

    }
}
