<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\StatisticController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\FogController;
use App\Http\Controllers\Api\TalentController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CourseController;



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


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);


Route::middleware('auth:api')->group( function(){

Route::get('abouts', [AboutController::class, 'getAbout']);

Route::get('fogs', [FogController::class, 'getFog']);

Route::get('talents', [TalentController::class, 'getTalent']);

Route::get('courses', [CourseController::class, 'getCourse']);

Route::get('posts', [PostController::class, 'getPost']);
Route::get('post/{id}', [PostController::class, 'findPost']);

Route::get('events', [EventController::class, 'getEvent']);
Route::get('event/{id}', [EventController::class, 'findEvent']);

Route::get('categories', [CategoryController::class, 'getCategory']);
Route::get('statistics', [StatisticController::class, 'getStatistic']);

Route::get('teams', [TeamController::class, 'getTeam']);
Route::get('team/{id}', [TeamController::class, 'findTeam']);

Route::post('contact', function(Request $request) {
    return Contact::create($request->all());
});

// Route::get('botir', [AboutController::class, 'getApi']);

});
