<?php

namespace plugin\blogs\app\admin\controller;

use support\Request;
use support\Response;
use plugin\blogs\app\admin\model\BlogsClassify;
use plugin\admin\app\controller\Crud;
use support\exception\BusinessException;

/**
 * 文章分类 
 */
class BlogsClassifyController extends Crud
{
    
    /**
     * @var BlogsClassify
     */
    protected $model = null;

    /**
     * 构造函数
     * @return void
     */
    public function __construct()
    {
        $this->model = new BlogsClassify;
    }
    
    /**
     * 浏览
     * @return Response
     */
    public function index(): Response
    {
        return raw_view('blogs-classify/index');
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
        return raw_view('blogs-classify/insert');
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
        return raw_view('blogs-classify/update');
    }

}
