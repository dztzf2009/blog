<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //设置不容许批量插入的字段为空
    protected $guarded = [];
    /**
     * 与视频模型的一对多关联
     */
    public function videos(){
        return $this->hasMany(Video::class);
    }
}
