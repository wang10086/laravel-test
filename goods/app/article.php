<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table    = 'article';
    public $timestamps  = false;
    protected $fillable = ['title','content','author_id'];

    public function author(){
        return $this->hasOne('App\author','id','author_id');
    }
}
