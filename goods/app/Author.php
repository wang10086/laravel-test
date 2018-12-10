<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table    = 'author';
    public $timestamps  = false;
    protected $fillable = ['name','sex'];

    public function article(){
        return $this->hasMany('App/Article','author_id','id');
    }
}
