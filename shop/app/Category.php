<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = ['name'];
    //如下定义和article模型的关系（多对多）
    public function article(){
    	return $this->belongsToMany('App\Article','article_category','category_id','article_id');
    }
}
