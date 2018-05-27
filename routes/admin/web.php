<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2018/5/27
 * Time: 00:58
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //后台登录
    Route::get('/login', 'LoginController@loginForm');
    Route::post('/login', 'LoginController@login');
    Route::get('/index','LoginController@index');
});