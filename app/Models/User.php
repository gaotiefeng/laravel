<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * table
     * @var string
     */
    protected $table = "user";

    /**
     * 主键
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * 指示模型主键是否递增
     * @var bool
     */
    public $incrementing = true;

    /**
     * 自动递增ID的“类型”
     * @var string
     */
    protected $keyType = "int";

    /**
     * 是否自动维护时间戳
     * @var bool
     */
    public $timestamps = true;

    /**
     * 模型日期列的存储格式
     * @var string
     */
    protected $dateFormat = '';


    /**
     *模型的默认属性值
     * @var array
     */
    protected $attributes = [
        'password' => "123456",
    ];

    /**
     *
     * @var array
     */
    protected $fillable = ['name','mobile'];
}
