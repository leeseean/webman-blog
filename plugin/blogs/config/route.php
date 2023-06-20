<?php

use Webman\Route;

Route::fallback(function () {
    return response('404 not found' , 404);
}, 'blogs');