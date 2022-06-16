<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class insert extends Model
{
    use HasFactory;
    public function insert_pencatatan($idproduk, $warehouse, $TujuanWarehouse, $jumlah){
        $insert = "INSERT INTO `PENCATATAN_STOK`(`ID_PENCATATAN`, `ID_PRODUK`, `TANGGAL_PENCATATAN`, `WAREHOUSE_ASAL`, `WAREHOUSE_TUJUAN`, `KETERANGAN`, `JUMLAH`, `DELETE_STATUS`) VALUES ('','".$idproduk."',date(now()),'".$warehouse."','".$TujuanWarehouse."','Pemindahan',".$jumlah.",0)";
        $runinsert = DB::insert($insert);
        return $runinsert;
    }
}
