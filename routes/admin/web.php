<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2018/5/27
 * Time: 00:58
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/abc', function () {
        return 'abc';
    });
});