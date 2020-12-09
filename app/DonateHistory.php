<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonateHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table  = "donate_histories";
    protected $fillable = [
        'name', 'blood', 'donate_date', 'bag_quantity', 'userID',
    ];
}
