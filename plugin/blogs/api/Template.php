<?php

namespace plugin\blogs\api;

use plugin\blogs\app\admin\model\BlogsArticle;
use plugin\blogs\app\admin\model\BlogsClassify;


/**
 * Class Template
 * @package plugin\blogs\api
 */
class Template
{

    /**
     * 网页头
     */
    public static function heads()
    {
        ob_start();
        include base_path('plugin/blogs/app/view/common/heads.html');
        return ob_get_clean();
    }

    /**
     * 导航栏
     */
    public static function navs()
    {
        // 栏目
        $classify = BlogsClassify::all();
        ob_start();
        include base_path('plugin/blogs/app/view/common/navs.html');
        return ob_get_clean();
    }

    /**
     * 右侧边栏
     */
    public static function rights()
    {
        $news = BlogsArticle::where(['status' => 0])
            ->select(['id', 'name'])
            ->limit(8)
            ->orderByDesc('id')
            ->get();
        $hots = BlogsArticle::where(['status' => 0])
            ->select(['id', 'name'])
            ->limit(8)
            ->orderByDesc('views')
            ->get();
        ob_start();
        include base_path('plugin/blogs/app/view/common/rights.html');
        return ob_get_clean();
    }

    /**
     * 页脚
     */
    public static function foots()
    {
        ob_start();
        include base_path('plugin/blogs/app/view/common/foots.html');
        return ob_get_clean();
    }

}