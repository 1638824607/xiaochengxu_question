<?php

use Illuminate\Http\Request;

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

Route::namespace('V1')->prefix('v1')->group(function ()
{
    Route::post('loginByOauth', 'LoginController@loginByOauth');
    Route::post('appStartList', 'LoginController@appStartList');

    Route::post('postList', 'PostController@postList');
    Route::post('cateList', 'PostController@cateList');
    Route::post('postHotList', 'PostController@postHotList');
    Route::post('postDetail', 'PostController@postDetail');
    Route::post('postCommentList', 'PostController@postCommentList');
    Route::post('sendPostComment', 'PostController@sendPostComment');
    Route::post('praisePost', 'PostController@praisePost');
    Route::post('praisePostComment', 'PostController@praisePostComment');
    Route::post('reportPost', 'PostController@reportPost');
    Route::post('sharePost', 'PostController@sharePost');
    Route::post('sendPost', 'PostController@sendPost');
    Route::post('searchList', 'PostController@searchList');
    Route::post('searchTypeList', 'PostController@searchTypeList');

    Route::post('cateAdvList', 'AdvController@cateAdvList');
    Route::post('catePostAdvList', 'AdvController@catePostAdvList');
    Route::post('advList', 'AdvController@advList');

    Route::post('uploadPost', 'UploadController@uploadPost');
    Route::post('uploadUserCert', 'UploadController@uploadUserCert');
    Route::post('uploadUserAvatar', 'UploadController@uploadUserAvatar');

    Route::post('userInfo', 'UserController@userInfo');
    Route::post('userInfoEdit', 'UserController@userInfoEdit');
    Route::post('userPostList', 'UserController@userPostList');
    Route::post('userFollowStatus', 'UserController@userFollowStatus');
    Route::post('userFollow', 'UserController@userFollow');
    Route::post('userPostSourceList', 'UserController@userPostSourceList');
    Route::post('userCert', 'UserController@userCert');
    Route::post('userCertStatus', 'UserController@userCertStatus');
    Route::post('userSuggest', 'UserController@userSuggest');
    Route::post('help', 'UserController@help');
    Route::post('about', 'UserController@about');
    Route::post('userFollowList', 'UserController@userFollowList');
    Route::post('userFollowedList', 'UserController@userFollowedList');
    Route::post('userCommentedList', 'UserController@userCommentedList');

});
