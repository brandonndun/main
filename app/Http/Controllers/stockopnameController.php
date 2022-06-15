<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\stockopname;

class stockopnameController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function tableproduk(){
        $ID = DB :: table('PENCATATAN_STOK')
        ->SELECT('WAREHOUSE_ASAL')
        ->groupby('WAREHOUSE_ASAL')
        ->get();

        $user = new stockopname();
        $tabel = $user->tableproduk();
        return view('stockopname',compact(['tabel']),['ID' => $ID]);
    } 
}




