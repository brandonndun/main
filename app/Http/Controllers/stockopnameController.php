<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockopname;

class stockopnameController extends Controller
{
    public function tableproduk(){
        $user = new stockopname();
        $tabel = $user->tableproduk();
        return view('stockopname',compact(['tabel']));
    }

    public function details($id,Request $req) {
        $item = stockopname::query()->find($id);

        // $value = $req->session()->get('home');

        // $harga = $value[5] * $item->K_HARGA;

        // $hargaforamt =  number_format($harga);


        return view('stockopname',[
            "i" => $item,
        ]);
    }
}
    //

