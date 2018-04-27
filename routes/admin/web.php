<?php
/**
 * Created by PhpStorm.
 * User: 94788
 * Date: 2018/4/27
 * Time: 16:17
 */

Route::get('helloworld', function () {
    return "helloworld";
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/abc',function(){
        return "helloworld1";
    });
});