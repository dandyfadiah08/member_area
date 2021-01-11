<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
     protected $fillable = [
        'email','Order_No','total','value','status',
    ];
}
