<?php

namespace plugin\blogs\app\admin\model;

use plugin\admin\app\model\Base;


/**
 * @property integer $id ID(主键)
 * @property integer $classifys_id 所属分类
 * @property string $name 名称
 * @property string $image 图片
 * @property string $content 内容
 * @property integer $views 浏览量
 * @property string $memo 备注
 * @property integer $weight 排序
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 * @property integer $status 禁用
 */
class BlogsArticle extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs_articles';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $appends = [
        'classify_text',
        'content_text',
    ];

    public function getClassifyTextAttribute()
    {
        if (isset($this->classifys_id) && !empty($this->classifys_id)) {
            return BlogsClassify::where(['id' => $this->classifys_id])->value('name');
        }
        return '--';
    }

    public function getContentTextAttribute()
    {
        if (isset($this->content) && !empty($this->content)) {
            return strip_tags($this->content);
        }
        return '';
    }
    
}
