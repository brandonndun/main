<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view;
use App\Models\insert;

class send extends Controller
{
    public function viewSend(Request $req){
        $idproduk = $req->input('idproduk');
        $warehouse = $req->input('warehouse');
        $model = new view;
        $view_produk = $model->viewproduk($idproduk);
        return view('sendproduct', compact(['view_produk', 'warehouse']));
    }
    public function insert_pencatatan(Request $req){
        $idproduk = $req->input('idproduk');
        $warehouse = $req->input('warehouse-asal');
        $TujuanWarehouse = $req->input('TujuanWarehouse');
        $jumlah = $req->input('jumlah');
        $model = new insert;
        $insert_pencatatan=$model->insert_pencatatan($idproduk, $warehouse, $TujuanWarehouse, $jumlah);
        return redirect('/warehouse');
    }
}
