<?php

use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')
//    ->get('/user',
//        function (Request $request) {
//            return $request->user();
//        });

Route::apiResource('users', 'Auth\UserController');
Route::apiResource('users/{user_uuid}/tokens', 'Auth\TokenController');
Route::apiResource('vote', 'VoteController');
//Route::apiResource('tiles', 'Tile\TileController');
//Route::apiResource('groups', 'Tile\TileGroupController');
//Route::apiResource('groups/{group_id}/members', 'Tile\TileGroupMemberController');





