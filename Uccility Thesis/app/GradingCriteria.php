<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradingCriteria extends Model
{
    protected $guarded = [];

    public function getCriteriaItems()
    {
    	return $this->hasMany('App\CriteriaItem');
    }
}
