<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function word()
    {
        return $this->belongsToMany('App\Word');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function result()
    {
        return $this->hasMany('App\Result');
    }
}
