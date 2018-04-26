<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function word(){
        return $this->hasMany('App\Word');
    }

    public function package(){
        return $this->hasMany('App\Package');
    }
}
