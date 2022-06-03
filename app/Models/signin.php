<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signin extends Model
{
    use HasFactory;
    public function isExist($username, $password){
        $admin = "SELECT count(*) as `count` FROM ADMIN WHERE USERNAME= '".$username."' AND PASSWORD= '".$password."';";
        $signin = DB::select($admin);
        return $signin;
    }
}