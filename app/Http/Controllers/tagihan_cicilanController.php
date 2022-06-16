<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockopname;

class tagihan_cicilanController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function pembelian(Request $request){
        $filter1 = $request->input('filter1');
        $user = new stockopname();
        if($filter1 != null){
            $filter1 = "AND Warehouse ='".$filter1."'";
        }
        $pembelian = $user->tabletransaksi($filter1);
        return view('tagihan_cicilan',compact(['pembelian']) );
    }
}

