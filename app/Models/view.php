<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class view extends Model
{
    use HasFactory;
    public function viewproduk($idproduk){
        $view = "SELECT * FROM PRODUK WHERE ID_PRODUK = '".$idproduk."';";
        $run = DB::select($view);
        return $run;
    }
}
