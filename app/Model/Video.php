<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //设置不容许批量插入的字段为空
    protected $guarded = [];
}
