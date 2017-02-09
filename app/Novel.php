<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    public function hasManyChapters()
    {
    	return $this->hasMany('App\Chapter', 'novel_id', 'id')->orderby('order');
    }
}
