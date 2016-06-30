<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //tells laravel that 1 or many posts belongs to a category
    public function category() // note that it is singular
    {
        return $this->belongsTo('App\Category');
    }
}
