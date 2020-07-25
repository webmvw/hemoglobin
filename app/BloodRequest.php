<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table  = "bloodrequests";
    protected $fillable = [
        'name', 'phone','blood', 'bag_quantity', 'date', 'division', 'district', 'street_address', 'status', 'userID',
    ];
}
