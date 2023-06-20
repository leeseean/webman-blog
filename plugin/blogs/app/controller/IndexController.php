<?php

namespace plugin\blogs\app\controller;

use plugin\blogs\app\admin\model\BlogsBanner;
use plugin\blogs\api\Article;

/**
 * Class IndexController
 * @package plugin\blogs\app\controller
 */
class IndexController
{

    /**
     * index
     */
    public function index()
    {
        $banner = BlogsBanner::all();
        foreach ($banner as $key => $value) {
            if (!$value['url']) {
                $value['url'] = '3sdf';
            }
        }

        if (request()->isAjax()) {
            $data = Article::articles();
            return json(['data' => $data, 'code' => 0, 'msg' => 'ok']);
        }
        return raw_view('index/index', ['banner' => $banner]);
    }
}