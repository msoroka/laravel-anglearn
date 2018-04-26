<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function package()
    {
        return $this->belongsToMany('App\Package');
    }
}
