<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;
    protected $fillable = ['title'];
    //如下定义和 author模型的关系（一对一）
    public function author(){
    	//$this->hasOne(关联model，关联model的联系键，本model的联系键);
    	return $this->hasOne('App\Author','article_id','id');
    }
    //如下定义和comment模型的关系（一对多）
    public function comment(){
    	return $this->hasMany('App\Comment','article_id','id');
    }
    //如下定义和category模型的关系（多对多）
    public function category(){
        return $this->belongsToMany('App\Category','article_category','article_id','category_id');
    }
}
