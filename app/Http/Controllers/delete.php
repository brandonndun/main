<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class delete extends Controller
{
    //
    public function deleteproduk(Request $request){
        DB::table('PENCATATAN_STOK')
            ->where('ID_PENCATATAN', '=', $request->idpencatatan)
            ->update([
                'DELETE_STATUS' => 1
            ]);
    return redirect("/product2");

    
    }
} 
