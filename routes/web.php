<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\GroupController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComentController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\StreetController;
use App\Http\Controllers\Admin\TeacherController;

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

Route::auto('/', SiteController::class);

Route::get('/lang/{lang}', function($lang){
    session(['lang' => $lang]);

    return back();
});

Route::get('/', function(){
    return redirect('/welcome');
});
// Route::get('/group', [SiteController::class, 'group']);
// Route::get('/team', [SiteController::class, 'team']);
// Route::get('/achievements', [SiteController::class, 'achievements']);
// Route::get('/gallery', [SiteController::class, 'gallery']);
// Route::get('/blog', [SiteController::class, 'blog']);

// Route::post('/registers', [SiteController::class, 'registers'])->name('registers');
// Route::post('/copmlants', [SiteController::class, 'copmlants'])->name('copmlants');


Route::prefix('admin/')->name('admin.')->middleware(['auth', 'admin'])->group(function () 
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resources([
        '/infos' => InfoController::class,
        '/groups' => GroupController::class,
        '/teachers' => TeacherController::class,
        '/coments' => ComentController::class,
        '/articles' => ArticleController::class,
        '/gallaries' => GallaryController::class,

        '/humans' => HumanController::class,
        '/numbers' => NumberController::class,
        '/categories' => CategoryController::class,
        '/posts' => PostController::class,
        '/regions' => RegionController::class,
        '/districts' => DistrictController::class,
        '/streets' => StreetController::class,
    ]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
