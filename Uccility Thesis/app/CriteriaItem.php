<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriteriaItem extends Model
{
    protected $guarded = [];

    public function getCriteria()
    {
    	return $this->belongsTo('App\GradingCriteria');
    }

    public function getPoints()
    {
    	return $this->hasMany('App\GradingSheet');	
    }

    public function points()
    {
    	return $this->getPoints()->where('user_id', 27)->get();
    }
}
