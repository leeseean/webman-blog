<?php

namespace plugin\blogs\app\controller;

use plugin\blogs\api\Article;

/**
 * Class ClassifyController
 * @package plugin\blogs\app\controller
 */
class ClassifyController
{
    /**
     * index
     */
    public function index()
    {
        if (request()->isAjax()) {
            $cid = (int)request()->get('cid', 0);
            $data = Article::articles($cid);
            return json(['data' => $data, 'code' => 0, 'msg' => 'ok']);
        }
        return raw_view('classify/classify');
    }
}