<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function info()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function getPoints()
    {
    	return $this->belongsTo('App\GradingSheet', 'user_id');	
    }
}
