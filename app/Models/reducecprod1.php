<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reducecprod1 extends Model
{
    use HasFactory;
    
    protected $table ='PRODUK';
    public $primarykey ="ID_PRODUK";
    public $incrementing ="false";
    public $timestamps ="false";

}
