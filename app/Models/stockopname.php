<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class stockopname extends Model
{
    use HasFactory;
    public function tableproduk(){
        $value = "SELECT t.TANGGAL_PENCATATAN as `Tanggal`,t.ID_PRODUK as `ID_PRODUK`,t.WAREHOUSE_ASAL as `WAREHOUSE_ASAL`, t.WAREHOUSE_TUJUAN as `WAREHOUSE_TUJUAN`, t.JUMLAH as `JUMLAH`, `KETERANGAN` as `Keterangan` 
        FROM PENCATATAN_STOK t";
        $produk = DB::select($value);
        //me return ketika function tableproduk dipanggil
        return $produk;
}
}