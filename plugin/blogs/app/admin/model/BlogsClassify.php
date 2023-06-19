<?php

namespace plugin\blogs\app\admin\model;

use plugin\admin\app\model\Base;

/**
 * @property integer $id ID(主键)
 * @property string $name 名称
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class BlogsClassify extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs_classifys';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    
    
}
