<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table  = "stocks";
    protected $fillable = [
        'stockid', 'blood', 'date', 'status', 'sell_date',
    ];
}
