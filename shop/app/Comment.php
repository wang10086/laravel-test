<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;
    protected $fillable = ['content','article_id'];
    //定义与文章的关系（一对一）
    public function article(){
    	return $this->hasOne('App\Article','id','article_id');
    }
}
