<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function subcategory()
    {
        return $this->hasMany('App\Subcategory');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function language()
    {
        return $this->hasMany('App\Language');
    }
}
