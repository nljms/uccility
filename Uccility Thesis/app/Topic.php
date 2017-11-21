<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function getQuestions()
    {
    	return $this->hasMany('App\Question');
    }
}
