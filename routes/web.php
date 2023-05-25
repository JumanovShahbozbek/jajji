<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\StreetController;
use App\Models\District;

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

Route::get('/', [SiteController::class, 'welcome']);
Route::get('/group', [SiteController::class, 'group']);
Route::get('/team', [SiteController::class, 'team']);
Route::get('/achievements', [SiteController::class, 'achievements']);
Route::get('/gallery', [SiteController::class, 'gallery']);
Route::get('/blog', [SiteController::class, 'blog']);

Route::post('/registers', [SiteController::class, 'registers'])->name('registers');
Route::post('/copmlants', [SiteController::class, 'copmlants'])->name('copmlants');


Route::prefix('admin/')->name('admin.')/* ->middleware('auth') */->group(function () 
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('/infos', InfoController::class);
    Route::resource('/humans', HumanController::class);
    Route::resource('/numbers', NumberController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/regions', RegionController::class);
    Route::resource('/districts', DistrictController::class);
    Route::resource('/streets', StreetController::class);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
