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

    Route::prefix('knowledge')->group(function ()
    {
        Route::post('bannerList', 'KnowledgeController@bannerList');
        Route::post('cateList', 'KnowledgeController@cateList');
        Route::post('readCateList', 'KnowledgeController@readCateList');
        Route::post('readList', 'KnowledgeController@readList');
        Route::post('readInfo', 'KnowledgeController@readInfo');
        Route::post('matchList', 'KnowledgeController@matchList');
        Route::post('matchInfo', 'KnowledgeController@matchInfo');
        Route::post('matchRecordStart', 'KnowledgeController@matchRecordStart');
        Route::post('matchRecordEnd', 'KnowledgeController@matchRecordEnd');
        Route::post('matchRecordInfo', 'KnowledgeController@matchRecordInfo');
        Route::post('healthCateList', 'KnowledgeController@healthCateList');
        Route::post('healthList', 'KnowledgeController@healthList');
        Route::post('healthInfo', 'KnowledgeController@healthInfo');
        Route::post('healthRecordStart', 'KnowledgeController@healthRecordStart');
        Route::post('healthRecordEnd', 'KnowledgeController@healthRecordEnd');
        Route::post('healthRecordInfo', 'KnowledgeController@healthRecordInfo');
    });

    Route::prefix('community')->group(function ()
    {
        Route::post('postList', 'CommunityController@postList');
        Route::post('postDetail', 'CommunityController@postDetail');
        Route::post('postCommentList', 'CommunityController@postCommentList');
        Route::post('sendPostComment', 'CommunityController@sendPostComment');
        Route::post('praisePost', 'CommunityController@praisePost');
        Route::post('praisePostComment', 'CommunityController@praisePostComment');
        Route::post('sharePost', 'CommunityController@sharePost');
        Route::post('collectPost', 'CommunityController@collectPost');
        Route::post('sendPost', 'CommunityController@sendPost');
        Route::post('advisoryList', 'CommunityController@advisoryList');
        Route::post('advisoryOrder', 'CommunityController@advisoryOrder');
        Route::post('advisoryOrderEdit', 'CommunityController@advisoryOrderEdit');
    });

    Route::prefix('user')->group(function ()
    {
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

        Route::post('matchRecordList', 'UserController@matchRecordList');
        Route::post('healthRecordList', 'UserController@healthRecordList');
        Route::post('userPraiseList', 'UserController@userPraiseList');
        Route::post('userAdvisoryOrder', 'UserController@userAdvisoryOrder');
        Route::post('userCollectList', 'UserController@userCollectList');
    });


    Route::post('uploadPost', 'UploadController@uploadPost');
    Route::post('uploadUserAvatar', 'UploadController@uploadUserAvatar');

//    Route::post('postList', 'PostController@postList');
//    Route::post('cateList', 'PostController@cateList');
//    Route::post('postHotList', 'PostController@postHotList');
//    Route::post('postDetail', 'PostController@postDetail');
//    Route::post('postCommentList', 'PostController@postCommentList');
//    Route::post('sendPostComment', 'PostController@sendPostComment');
//    Route::post('praisePost', 'PostController@praisePost');
//    Route::post('praisePostComment', 'PostController@praisePostComment');
//    Route::post('reportPost', 'PostController@reportPost');
//    Route::post('sharePost', 'PostController@sharePost');
//    Route::post('sendPost', 'PostController@sendPost');
//    Route::post('searchList', 'PostController@searchList');
//    Route::post('searchTypeList', 'PostController@searchTypeList');
//
//    Route::post('cateAdvList', 'AdvController@cateAdvList');
//    Route::post('catePostAdvList', 'AdvController@catePostAdvList');
//    Route::post('advList', 'AdvController@advList');
//

//


});
