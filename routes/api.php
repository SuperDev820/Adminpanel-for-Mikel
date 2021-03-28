<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([ 'prefix' => 'v1', 'middleware' => 'api'], function(){

    /* User register */
    Route::post('user/register', 'App\Http\Controllers\Api\v1\AuthController@register');

    /* User login */
    Route::post('user/login', 'App\Http\Controllers\Api\v1\AuthController@login');

    /* Refresh user's token */
    Route::get('user/refresh', 'App\Http\Controllers\Api\v1\AuthController@token');

    /* User logout from system */
    Route::get('user/logout', 'App\Http\Controllers\Api\v1\AuthController@logout');

    // Get auth user
    Route::get('token/validate', 'App\Http\Controllers\Api\v1\AuthController@auth');

    //Admin actions
    Route::group([ 'prefix' => 'admin' ], function(){
        /* Get all users details*/
        Route::get('users', 'App\Http\Controllers\Api\v1\UserController@getAll');
        // /* Add a user */
        Route::post('user/create', 'App\Http\Controllers\Api\v1\UserController@create');
        // /* Update a user */
        Route::put('user/update', 'App\Http\Controllers\Api\v1\UserController@update');
        /* Get user detail by id */
        Route::get('user/{userId}', 'App\Http\Controllers\Api\v1\UserController@getById');
        /* delete user by id */
        Route::delete('user/delete/{userId}', 'App\Http\Controllers\Api\v1\UserController@delete');

        /* Get all categories details*/
        Route::get('categories', 'App\Http\Controllers\Api\v1\CategoryController@getAll');
        /* Get all categories' names*/
        Route::get('category/options', 'App\Http\Controllers\Api\v1\CategoryController@getCategoryOptions');
        // /* Add a category */
        Route::post('category/create', 'App\Http\Controllers\Api\v1\CategoryController@create');
        // /* Update a category */
        Route::put('category/update', 'App\Http\Controllers\Api\v1\CategoryController@update');
        /* Get category detail by id */
        Route::get('category/{categoryId}', 'App\Http\Controllers\Api\v1\CategoryController@getById');
        /* delete category by id */
        Route::delete('category/delete/{categoryId}', 'App\Http\Controllers\Api\v1\CategoryController@delete');

        /* Get all competition_types details*/
        Route::get('competition_types', 'App\Http\Controllers\Api\v1\CompetitionTypeController@getAll');
        /* Get all competition_types' names*/
        Route::get('competition_type/options', 'App\Http\Controllers\Api\v1\CompetitionTypeController@getTypeOptions');
        // /* Add a competition_type */
        Route::post('competition_type/create', 'App\Http\Controllers\Api\v1\CompetitionTypeController@create');
        // /* Update a competition_type */
        Route::put('competition_type/update', 'App\Http\Controllers\Api\v1\CompetitionTypeController@update');
        /* Get competition_type detail by id */
        Route::get('competition_type/{competition_typeId}', 'App\Http\Controllers\Api\v1\CompetitionTypeController@getById');
        /* delete competition_type by id */
        Route::delete('competition_type/delete/{competition_typeId}', 'App\Http\Controllers\Api\v1\CompetitionTypeController@delete');

        /* Get all lycras details*/
        Route::get('lycras', 'App\Http\Controllers\Api\v1\LycraController@getAll');
        /* Get all lycras' names*/
        Route::get('lycra/options', 'App\Http\Controllers\Api\v1\LycraController@getLycraOptions');
        // /* Add a lycra */
        Route::post('lycra/create', 'App\Http\Controllers\Api\v1\LycraController@create');
        // /* Update a lycra */
        Route::put('lycra/update', 'App\Http\Controllers\Api\v1\LycraController@update');
        /* Get lycra detail by id */
        Route::get('lycra/{lycraId}', 'App\Http\Controllers\Api\v1\LycraController@getById');
        /* delete lycra by id */
        Route::delete('lycra/delete/{lycraId}', 'App\Http\Controllers\Api\v1\LycraController@delete');

        /* Get all clubs details*/
        Route::get('clubs', 'App\Http\Controllers\Api\v1\ClubController@getAll');
        /* Get all clubs' names*/
        Route::get('club/options', 'App\Http\Controllers\Api\v1\ClubController@getClubOptions');
        // /* Add a club */
        Route::post('club/create', 'App\Http\Controllers\Api\v1\ClubController@create');
        // /* Update a club */
        Route::put('club/update', 'App\Http\Controllers\Api\v1\ClubController@update');
        /* Get club detail by id */
        Route::get('club/{clubId}', 'App\Http\Controllers\Api\v1\ClubController@getById');
        /* delete club by id */
        Route::delete('club/delete/{clubId}', 'App\Http\Controllers\Api\v1\ClubController@delete');

        /* Get all competitions details*/
        Route::get('competitions', 'App\Http\Controllers\Api\v1\CompetitionController@getAll');
        // /* Add a Competition */
        Route::post('competition/create', 'App\Http\Controllers\Api\v1\CompetitionController@create');
        // /* Update a Competition */
        Route::put('competition/update', 'App\Http\Controllers\Api\v1\CompetitionController@update');
        /* Get Competition detail by id */
        Route::get('competition/{competitionId}', 'App\Http\Controllers\Api\v1\CompetitionController@getById');
        /* delete Competition by id */
        Route::delete('competition/delete/{competitionId}', 'App\Http\Controllers\Api\v1\CompetitionController@delete');

        /* Get all participants details*/
        Route::get('participants', 'App\Http\Controllers\Api\v1\ParticipantController@getAll');
        // /* Add a participant */
        Route::post('participant/create', 'App\Http\Controllers\Api\v1\ParticipantController@create');
        // /* Update a participant */
        Route::put('participant/update', 'App\Http\Controllers\Api\v1\ParticipantController@update');
        /* Get participant detail by id */
        Route::get('participant/{participantId}', 'App\Http\Controllers\Api\v1\ParticipantController@getById');
        /* delete participant by id */
        Route::delete('participant/delete/{participantId}', 'App\Http\Controllers\Api\v1\ParticipantController@delete');

        /* Get all ranking_points details*/
        Route::get('all_ranking_points', 'App\Http\Controllers\Api\v1\RankingPointsController@getAll');

        Route::get('rankings', 'App\Http\Controllers\Api\v1\RankingPointsController@getAllRankings');
        // /* Update a ranking */
        Route::put('ranking/update', 'App\Http\Controllers\Api\v1\RankingPointsController@updateRanking');
        /* Get ranking detail by id */
        Route::get('ranking/{rankingId}', 'App\Http\Controllers\Api\v1\RankingPointsController@getRankingById');

        /* Get all all_category_modality details*/
        Route::get('manage_ranking/all_category_modality', 'App\Http\Controllers\Api\v1\ManageRankingController@getAllCategoryModality');
        /* Get all all_ranking_data details*/
        Route::post('manage_ranking/all_ranking_data', 'App\Http\Controllers\Api\v1\ManageRankingController@getAllRankingData');
    });

    Route::group(['middleware' => ['jwt.auth']], function() {



        // /* Show all teams */
        // Route::get('teams', 'Api\v1\TeamController@index');


        // /* Player actions */
        // Route::prefix('player')->group(function () {
        //     /* Delete a player */
        //     Route::delete('{player}', 'Api\v1\PlayerController@destroy');
        //     /* Update a player in a team */
        //     Route::patch('{player}', 'Api\v1\PlayerController@update');
        // });

    });

});
