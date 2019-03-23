<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $guarded = [];
    protected $dates = ['jatuhtempo','tglbayar'];

    public function user() 
    {
    	return $this->belongsTo('App\User','user_id','user_id');
    }
}
