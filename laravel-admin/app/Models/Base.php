<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Model
{
    // 软删除
    use SoftDeletes;

    /**
     * 禁止被批量赋值的字段
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 不显示的字段
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * 添加数据
     *
     * @param  array $data 需要添加的数据
     * @return bool        是否成功
     */
    public function addData($data)
    {
        //添加数据
        $result=$this
            ->create($data)
            ->id;
        if ($result) {
            show_message('添加成功');
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 修改数据
     *
     * @param  array $map  where条件
     * @param  array $data 需要修改的数据
     * @return bool        是否成功
     */
    public function editData($map, $data)
    {
        $model = $this
            ->whereMap($map)
            ->withTrashed()
            ->get();
        // 可能有查不到数据的情况
        if ($model->isEmpty()) {
            show_message('无需要添加的数据', false);
            return false;
        }
        foreach ($model as $k => $v) {
            $result = $v->forceFill($data)->save();
        }
        if ($result) {
            show_message('修改成功');
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 删除数据
     *
     * @param  array $map   where 条件数组形式
     * @return bool         是否成功
     */
    public function deleteData($map)
    {
        //软删除
        $result=$this
            ->where($map)
            ->delete();
        if ($result) {
            show_message('操作成功');
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 排序
     * @param  array $data 需要排序的数据
     * @return bool        是否成功
     */
    public function orderData($data)
    {
        //如果存在_token字段；则删除
        if (isset($data['_token'])) {
            unset($data['_token']);
        }
        //判断是否有需要排序的字段
        if (empty($data)) {
            show_message('没有需要排序的数据', false);
            return false;
        }
        //循环修改数据
        foreach ($data as $k => $v){
            $v = empty($v) ? null : $v;
            $edit_data=[
                'order_number'=>$v
            ];
            //修改数据
            $result=$this
                ->where('id',$k)
                ->update($edit_data);
        }
        if ($result) {
            show_message('操作成功');
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 使用作用域扩展 Builder 链式操作
     *
     * 示例:
     * $map = [
     *     'id' => ['in', [1,2,3]],
     *     'category_id' => ['<>', 9],
     *     'tag_id' => 10
     * ]
     *
     * @param $query
     * @param $map
     * @return mixed
     */
    public function scopeWhereMap($query, $map)
    {
        // 如果是空直接返回
         if (empty($map)) {
            return $query;
        }
        // 判断各种方法
         foreach ($map as $k => $v) {
            if (is_array($v)) {
                $sign = strtolower($v[0]);
                switch ($sign) {
                    case 'in':
                        $query->whereIn($k, $v[1]);
                        break;
                    case 'notin':
                        $query->whereNotIn($k, $v[1]);
                        break;
                    case 'between':
                        $query->whereBetween($k, $v[1]);
                        break;
                    case 'notbetween':
                        $query->whereNotBetween($k, $v[1]);
                        break;
                    case 'null':
                        $query->whereNull($k);
                        break;
                    case 'notnull':
                        $query->whereNotNull($k);
                        break;
                    case '=':
                    case '>':
                    case '<':
                    case '<>':
                        $query->where($k, $sign, $v[1]);
                        break;
                }
            } else {
                $query->where($k, $v);
            }
        }
        return $query;
    }
    
}
