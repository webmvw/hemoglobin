<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{

	protected $table  = "roles";
    protected $fillable = [
        'name',
    ];

    public function user(){
    	return $this->hasMany('App\User');
    }
}
