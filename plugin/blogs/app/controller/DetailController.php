<?php

namespace plugin\blogs\app\controller;

use plugin\blogs\app\admin\model\BlogsArticle;

/**
 * Class DetailController
 * @package plugin\blogs\app\controller
 */
class DetailController
{
    /**
     * index
     */
    public function index()
    {
        $id = (int)request()->get('id', 0);
        $where = ['status' => 0];
        if ($id) {
            $where['id'] = $id;
        }
        $detail = BlogsArticle::where($where)->first();
        $sames = [];
        if ($detail) {
            $detail->views = $detail->views + 1;
            $detail->save();
        $sames = BlogsArticle::query()
            ->where('id', '<>', $id)
            ->where('classifys_id', '=', $detail->classifys_id)
            ->select(['id', 'name', 'image'])
            ->limit(3)
            ->get();
        }
        return raw_view('detail/detail', ['detail' => $detail, 'sames' => $sames]);
    }
}