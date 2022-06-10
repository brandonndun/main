<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reduce extends Model
{
    use HasFactory;
    public function isExist($idproduk, $namaproduk, $jumlah, $keterangan){
        $admin = "SELECT count(*) as `count` FROM ADMIN WHERE USERNAME= '".$username."' AND PASSWORD= '".$password."';";
        $signin = DB::select($admin);
        return $signin;
    }
}