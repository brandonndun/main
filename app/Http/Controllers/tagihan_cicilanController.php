<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockopname;

class stockopnameController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function pembelian(){
         $transaksi = DB::select('select * from PEMBELIAN');
        return view('pembelian')->with('pembelian', $pembelian);
       ;
    }
}

