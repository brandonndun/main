<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reduce extends Model
{
    use HasFactory;
    public function isreduce($idproduk, $namaproduk, $jumlah, $keterangan){
        // $admin = "SELECT count(*) as `count` FROM ADMIN WHERE USERNAME= '".$username."' AND PASSWORD= '".$password."';";
        // $signin = DB::select($admin);
        // return $signin;
        // DB::table('PENCATATAN_STOK')->select([

            // 'JUMLAH' => $->jumlah WHERE
            // 'ID_PENCATATAN' => $request->id_pencatatan,
            // 'ID_PRODUK' => $request ->idproduk,
            // 'KETERANGAN' => $request->keterangan,
            // 'WAREHOUSE_ASAL' => $request->warehouse_asal,
            // 'TANGGAL_PENCATATAN' => now()
        // ]);
        // return redirect("/product2");
        $SERVER = "SELECT JUMLAH from PENCATATAN_STOCK where ID_PRODUK = '".$idproduk."'";
        $run = DB::SELECT($SERVER);
        DD($SERVER);

        return run;

    }
}