<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(DistrictController::class)->group(function(){
    Route::get('list', 'list');
});

Route::controller(WardController::class)->group(function(){
    Route::get('ward-list', 'list');
});

Route::controller(ShopController::class)->group(function(){
    Route::get('shop-list', 'list');
    Route::post('shop-list1','list1');
    Route::get('sum','sumItems');

});

Route::controller(UserController::class)->group(function(){
    Route::get('user-list','list');
    Route::post('user-list1','list1');
    Route::get('max','maxItems');
    Route::get('letest','letest');
    Route::get('max-items','maxItems');
    Route::post('count-shop','countShop');
    Route::get('sum-items','sumItem');
}); 