<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reduceproduct;
use Illuminate\Support\Facades\View;
class insert extends Controller
{
    //
    public function reduce2(Request $request){
       
       $jumlah = $request -> input('jumlah');
       $idproduk = $request -> input('idproduk');
       $tujuan = $request -> input('tujuan');
       $keterangan = $request -> input('keterangan');
       $namaproduk = $request -> input('namaproduk');

       $reduce = new reduce;
       $buwbuw = $reduce ->  isreduce($jumlah, $idproduk, $keterangan, $namaproduk);

       return view ('/product');
    }
}

