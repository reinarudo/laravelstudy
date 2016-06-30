<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //need to manually tell that it uses categories table because the
    //db table name does not follow the convention e.g. categorys - different spelling
    //thus model is singular, while database table is plural
    protected $table = 'categories';

    //tells laravel that a category has 1 to many relationship to posts table
    public function posts() //note that it is plural
    {
        return $this->hasMany('App\Post');
    }
}
