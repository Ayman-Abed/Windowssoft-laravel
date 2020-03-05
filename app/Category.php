<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits


// to make model and Migration php artinsa make:model Category -m
class Category extends Model
{

    use SoftDeletes; //<--- use the softdelete traits

    protected $dates = ['deleted_at'];



    // to make Relation betwenn Tables
    public function posts(){

        return $this->hasMany("App\Post");

    }


    protected $fillable = [
        'name'
    ];
}
