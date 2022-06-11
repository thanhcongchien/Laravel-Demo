<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';
        protected $table = 'hotel';
    public function product_type(){
        return $this->belongTo('App\TypeProduct', 'id_type','id');

    }

    public function bill_detail()
    {
        return $this->hasMany('App\BilDetail','id_product','id');
    }
}
