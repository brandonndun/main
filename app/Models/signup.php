<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    use HasFactory;
    public function signup($user, $password, $warehouse, $nama){
        $admin = "SELECT if(count(*)<10,concat('ADM00',count(*)+1),if(count(*)<100,concat('ADM0',count(*)+1),'ADM000')) from `ADMIN`;";
        $admin2 = "SELECT CONCAT('ADM', LPAD((IFNULL(SUBSTR(MAX(ID_ADMIN), 4, 6), 0) + 1), 3, '0')) AS `ID_BARU_ADMIN` FROM ADMIN;";
        $admin = DB::select($admin);
        $admin2 = DB::select($admin2);
    
        $insert_data = "INSERT INTO `ADMIN`(`ID_ADMIN`, `NAMA`, `WAREHOUSE_KERJA`, `USERNAME`, `PASSWORD`) VALUES ('".$admin2[0]->ID_BARU_ADMIN."','".$nama."','".$warehouse."','".$user."','".$password."');";
        $run_insert = DB::insert($insert_data);
        return $run_insert;
    }
    //insert produk ke pembelian
    public function insert_produk($id_produk, $supplier, $harga, $warehouse, $jumlah, $status){
        $query = "INSERT INTO `PEMBELIAN`(`Warehouse`, `ID_PRODUK`, `TANGGAL_PEMBELIAN`, `NAMA_SUPPLIER`, `JUMLAH`, `TOTAL_BELI`, `STATUS_PEMBAYARAN`) VALUES ('".$warehouse."', '".$id_produk."', date(now()), '".$supplier."',".$jumlah.",".$harga.", '".$status."');";
        $run_query = DB::insert($query);
        return $run_query;
    }
    //nampilin produk
    public function show_product($id_produk){
        $query = "SELECT * FROM PRODUK WHERE ID_PRODUK = '".$id_produk."';";
        $run_query = DB::select($query);
        return $run_query;
    }
    //insert produk ke pencatatan stok
    public function insert_pencatatan($id_produk, $warehouse, $jumlah){
        $insertquery = "INSERT INTO `PENCATATAN_STOK`(`ID_PENCATATAN`, `ID_PRODUK`, `TANGGAL_PENCATATAN`, `WAREHOUSE_ASAL`, `WAREHOUSE_TUJUAN`, `KETERANGAN`, `JUMLAH`, `DELETE_STATUS`) VALUES ('','".$id_produk."',date(now()),'Supplier','".$warehouse."','Pembelian','".$jumlah."','0')";
        $run_insert = DB::insert($insertquery);
        return $run_insert;
    }
}
