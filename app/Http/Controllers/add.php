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
        $id_produk = $request->input('idproduk');
        $supplier = $request->input('supplier');
        $warehouse = $request->input('Warehouse');
        $harga = $request->input('Harga');
        $jumlah = $request->input('jumlah');
        $status = $request->input('Pembayaran');
        $model = new signup;
        $insert = $model->insert_produk($id_produk, $supplier, $harga, $warehouse, $jumlah, $status);
        return redirect('/product2');
    }
}
