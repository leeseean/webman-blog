<?php

namespace plugin\blogs\app\admin\controller;

use support\Request;
use support\Response;
use plugin\blogs\app\admin\model\BlogsBanner;
use plugin\admin\app\controller\Crud;
use support\exception\BusinessException;

/**
 * 轮播图 
 */
class BlogsBannerController extends Crud
{
    
    /**
     * @var BlogsBanner
     */
    protected $model = null;

    /**
     * 构造函数
     * @return void
     */
    public function __construct()
    {
        $this->model = new BlogsBanner;
    }
    
    /**
     * 浏览
     * @return Response
     */
    public function index(): Response
    {
        return raw_view('blogs-banner/index');
    }

    /**
     * 插入
     * @param Request $request
     * @return Response
     * @throws BusinessException
     */
    public function insert(Request $request): Response
    {
        if ($request->method() === 'POST') {
            return parent::insert($request);
        }
        return raw_view('blogs-banner/insert');
    }

    /**
     * 更新
     * @param Request $request
     * @return Response
     * @throws BusinessException
    */
    public function update(Request $request): Response
    {
        if ($request->method() === 'POST') {
            return parent::update($request);
        }
        return raw_view('blogs-banner/update');
    }

}
