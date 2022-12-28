<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\FogController;
use App\Http\Controllers\Admin\TalentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;

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

 Route::get('/admin', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

 Route::get('/', [PageController::class, 'index'])->name('/');

 Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){

    Route::resource('users', UserController::class);

    Route::resource('roles', RoleController::class);

    Route::resource('posts', PostController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('events', EventController::class);

    Route::resource('statistics', StatisticController::class);

    Route::resource('abouts', AboutController::class);

    Route::resource('teams', TeamController::class);

    Route::resource('fogs', FogController::class);

    Route::resource('talents', TalentController::class);
    
    Route::resource('courses', CourseController::class);

    Route::resource('contacts', ContactController::class);


});

require __DIR__.'/auth.php';
