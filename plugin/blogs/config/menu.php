<?php

return [
    [
        'title' => '博客管理',
        'key' => 'blogs',
        'icon' => 'layui-icon-read',
        'weight' => 0,
        'type' => 0,
        'children' => [
            [
                'title' => '文章管理',
                'key' => 'plugin\\blogs\\app\\admin\\controller\\BlogsArticleController',
                'href' => '/app/blogs/admin/blogs-article/index',
                'type' => 1,
                'weight' => 0,
            ],
            [
                'title' => '轮播图',
                'key' => 'plugin\\blogs\\app\\admin\\controller\\BlogsBannerController',
                'href' => '/app/blogs/admin/blogs-banner/index',
                'type' => 1,
                'weight' => 0,
            ],
            [
                'title' => '文章分类',
                'key' => 'plugin\\blogs\\app\\admin\\controller\\BlogsClassifyController',
                'href' => '/app/blogs/admin/blogs-classify/index',
                'type' => 1,
                'weight' => 0,
            ],
        ]
    ],
];
