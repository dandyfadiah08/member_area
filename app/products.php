<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'product','Shipping_Address','price',
    ];
}
