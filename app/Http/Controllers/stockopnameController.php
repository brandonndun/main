<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockopname;

class stockopnameController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function tableproduk(){
        $user = new stockopname();
        $tabel = $user->tableproduk();
        return view('stockopname',compact(['tabel']));
    }
}

