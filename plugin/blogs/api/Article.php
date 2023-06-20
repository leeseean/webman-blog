<?php

namespace plugin\blogs\api;

use plugin\blogs\app\admin\model\BlogsArticle;

/**
 * Class Article
 * @package plugin\blogs\api
 */
class Article
{

    /**
     * articles
     * @param $cid
     */
    public static function articles(int $cid = 0)
    {
        $where = ['status' => 0];
        if ($cid) {
            $where['classifys_id'] = $cid;
        }
        return BlogsArticle::where($where)
            ->orderByDesc('id')
            ->paginate(5);
    }
}