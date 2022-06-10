<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;



class add extends Controller
{
    public function show_add(Request $req){
        $id_produk = $req->input('id_add_produk');
        $model = new signup;
        $get_data_produk = $model->show_product($id_produk);

        return view('addproduct', compact(['get_data_produk']));
    }

    public function add(Request $request){
        $produk = $request->input('nama');
        $supplier = $request->input('supplier');
        $jumlah = $request->input('jumlah');
        $model = new signup;
        $insert = $model->insert_produk($produk, $supplier, $jumlah);
        return redirect('/product2');
    }
}
