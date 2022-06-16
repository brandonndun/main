<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\stockopname;

class stockopnameController extends Controller
{
    //Mengirim data tabel ke view stockopname
    public function tableproduk(Request $req){
        $ID = DB :: table('PENCATATAN_STOK')
        ->SELECT('WAREHOUSE_ASAL')
        ->groupby('WAREHOUSE_ASAL')
        ->get();
        
        // $filter = $req->filter ;
        $filter = $req->input('filter');
        if($filter != null){
            $filter = "AND (A.WAREHOUSE_ASAL ='".$filter."' OR A.WAREHOUSE_TUJUAN ='".$filter."')";
        }
        $user = new stockopname();
        $tabel = $user->tableproduk($filter);
        return view('stockopname',compact(['tabel']),['ID' => $ID]);
    } 
    


    // function index(Request $request)

    // {
    //     $warehouse = DB :: table('PEMBELIAN')
    //                     -> select ('Warehouse')
    //                     -> groupBy('Warehouse')
    //                     -> get();

    //     return view('custom_search' , compact('warehouse'))
    // }
}




