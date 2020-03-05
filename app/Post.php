<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits




// to make model and Migration php artinsa make:model Post -m


class Post extends Model

    // to make Relation betwenn Tables
{

    use SoftDeletes; //<--- use the softdelete traits

    protected $dates = ['deleted_at'];




    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    // to get Full Path for  image

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }


    protected $fillable = [
        'title', 'content', 'link',  'category_id', 'featured', 'slug', 'count_view'
    ];








}
