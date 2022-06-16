<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockopname;

class tagihan_cicilanController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function pembelian(){
        $user = new stockopname();
        $pembelian = $user->tabletransaksi();
        // dd($pembelian) ; 
        return view('tagihan_cicilan',compact(['pembelian']) );
    }
}

