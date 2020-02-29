<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

//Route::get('he    llo', function () {
//   return 'welcome to hello';
//});

//name 与第一pjh个参数有关 与顺序有关
Route::get('hello/{name}/{password?}', function ($name, $password = '') {
        return 'name:' . $name . ',password:' . $password;
})->where([
    'name'     => '[a-zA-Z]+',
    'password' => '[a-zA-Z0-9]+'
]);

// App\Http\Controllers\IndexController

Route::get('index/demo', 'IndexController@demo');

//Route::group(['prefix' => 'index'], function () {
////    Route::get('index', 'IndexController@index');
////    Route::get('demo', 'IndexController@demo');
////});
Route::prefix('index')->group(function () {
        Route::get('index', 'IndexController@index');
        Route::get('demo', 'IndexController@demo');
        Route::get('demo2', 'IndexController@demo2');
        Route::get('demo3', 'IndexController@demo3');
});



// App\Http\Controllers\IndexController
Route::get('goods', 'Shop\GoodsController@goods');

Route::get('shop/goods/demo', 'Shop\GoodsController@goods');


/**
 *              [路由分组]
 *          middleare: 中间件
 *          namespace: 命名空间
 *          prefix:    前缀
 *          domain:    域名
 *          name:      别名前缀
 */
Route::group(['prefix' => 'shop', 'namespace' => 'Shop'], function () {
    Route::group(['prefix' => 'goods'], function () {
        Route::get('index', 'GoodsController@index');
        Route::get('demo', 'GoodsController@demo');
    });
});


Route::get('view', function() {
   return view('child');
});
