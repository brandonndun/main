<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class stockopname extends Model
{
    use HasFactory;
    public function  tableproduk($filter){
        
        $value = "SELECT TANGGAL_PENCATATAN as `TANGGAL` , NAMA_PRODUK , WAREHOUSE_ASAL , WAREHOUSE_TUJUAN , JUMLAH , KETERANGAN
        FROM PENCATATAN_STOK A , PRODUK B  WHERE A.ID_PRODUK = B.ID_PRODUK ".$filter.";";
        $produk = DB::select($value);
        // dd($value) ;
        //me return ketika function tableproduk dipanggil
        return $produk;
}
}