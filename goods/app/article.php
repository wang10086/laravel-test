<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Article extends BaseModel
{
    //
    protected $table    = 'article';
    public $timestamps  = true;
    protected $fillable = ['title','content','author_id'];

    public function author(){
        return $this->hasOne('App\author','id','author_id');
    }
}
