<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    protected $table    = 'article';
    public $timestamps  = true;
    protected $fillable = ['title','content'];
}
