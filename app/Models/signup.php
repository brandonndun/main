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
        // dd($user, $password, $warehouse, $nama);
        // dd($nama);
        // dd($admin, $admin2[0], $nama);
        $insert_data = "INSERT INTO `ADMIN`(`ID_ADMIN`, `NAMA`, `WAREHOUSE_KERJA`, `USERNAME`, `PASSWORD`) VALUES ('".$admin2[0]->ID_BARU_ADMIN."','".$nama."','".$warehouse."','".$user."','".$password."');";
        // DB::table('ADMIN')->insert([
        //    'ID_ADMIN' => $admin2[0],
        //    'NAMA' => $nama,
        //    'WAREHOUSE_KERJA'=> $warehouse,
        //    'USERNAME'=> $user,
        //    'PASSWORD'=> $password
        // ]);
        $run_insert = DB::insert($insert_data);

        return $run_insert;
    }

    public function insert_produk($produk, $supplier, $jumlah){
        $query = "INSERT INTO `PRODUK`(`NAMA_PRODUK`, `FOTO_PRODUK`, `DELETE_STATUS`) VALUES ('".$produk."','".$supplier."','".$jumlah."','0');";
        $run_query = DB::insert($query);
        return $run_query;
    }

    public function show_product($id_produk){
        $query = "SELECT * FROM PRODUK WHERE ID_PRODUK = '".$id_produk."';";
        $run_query = DB::select($query);
        return $run_query;
    }
}
