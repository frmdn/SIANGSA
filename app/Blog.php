<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'description','user_id'
    ];

    public function admin() 
    {
    	return $this->belongsTo('App\Admin','user_id');
    }
}
