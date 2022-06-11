<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    public function product()
    {

        return $this->belongsTo('App\Product','id_product','id');
        # code...
    }

    public function bill()
    {
        return $this->belongsTo('App\Bill', 'id_bill', 'id');
        # code...
    }
}
