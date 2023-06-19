<?php

namespace plugin\blogs\app\admin\controller;

use support\Request;
use support\Response;
use plugin\blogs\app\admin\model\BlogsArticle;
use plugin\admin\app\controller\Crud;
use support\exception\BusinessException;

/**
 * 文章管理 
 */
class BlogsArticleController extends Crud
{
    
    /**
     * @var BlogsArticle
     */
    protected $model = null;

    /**
     * 构造函数
     * @return void
     */
    public function __construct()
    {
        $this->model = new BlogsArticle;
    }
    
    /**
     * 浏览
     * @return Response
     */
    public function index(): Response
    {
        return raw_view('blogs-article/index');
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
        return raw_view('blogs-article/insert');
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
        return raw_view('blogs-article/update');
    }

}
