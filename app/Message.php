<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
        protected $fillable = [
         'name', 'slug'
    ];

    public function users()
    {

    	return $this->belongsToMany(User::class);
    	
    }
}
