<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ComentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use Egulias\EmailValidator\Parser\Comment;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
;lcjbsakcgit
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


Route::prefix('admin/')->name('admin.')->group(function () 
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


   /*  Route::get('infos/index', [InfoController::class, 'index'])->name('infos.index');
    Route::get('infos/create', [InfoController::class, 'create'])->name('infos.create');
    Route::post('infos/store', [InfoController::class, 'store'])->name('infos.store');
    Route::get('infos/show/{id}', [InfoController::class, 'show'])->name('infos.show');
    Route::get('infos/edit/{id}', [InfoController::class, 'edit'])->name('infos.edit');
    Route::put('infos/update/{id}', [InfoController::class, 'update'])->name('infos.update');
    Route::delete('infos/destroy/{id}', [InfoController::class, 'destroy'])->name('infos.destroy'); */


   /*  Route::get('groups/index', [GroupController::class, 'index'])->name('groups.index');
    Route::get('groups/create', [GroupController::class, 'create'])->name('groups.create');
    Route::post('groups/store', [GroupController::class, 'store'])->name('groups.store');
    Route::get('groups/show/{id}', [GroupController::class, 'show'])->name('groups.show');
    Route::get('groups/edit/{id}', [GroupController::class, 'edit'])->name('groups.edit');
    Route::put('groups/update/{id}', [GroupController::class, 'update'])->name('groups.update');
    Route::delete('groups/destroy/{id}', [GroupController::class, 'destroy'])->name('groups.destroy'); */


  /*   Route::get('teachers/index', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('teachers/show/{id}', [TeacherController::class, 'show'])->name('teachers.show');
    Route::get('teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('teachers/update/{id}', [TeacherController::class,'update'])->name('teachers.update');
    Route::delete('teachers/destroy/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy'); */



    /* Route::get('coments/index', [ComentController::class, 'index'])->name('coments.index');
    Route::get('coments/create', [ComentController::class, 'create'])->name('coments.create');
    Route::post('coments/store', [ComentController::class, 'store'])->name('coments.store');
    Route::get('coments/show/{id}', [ComentController::class, 'show'])->name('coments.show');
    Route::get('coments/edit/{id}', [ComentController::class, 'edit'])->name('coments.edit');
    Route::put('coments/update/{id}', [ComentController::class,'update'])->name('coments.update');
    Route::delete('coments/destroy/{id}', [ComentController::class, 'destroy'])->name('coments.destroy'); */



   /*  Route::get('articles/index', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('articles/show/{id}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('articles/update/{id}', [ArticleController::class,'update'])->name('articles.update');
    Route::delete('articles/destroy/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy'); */


    Route::resource('/infos', InfoController::class);
    Route::resource('/groups', GroupController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/coments', ComentController::class);
    Route::resource('/articles', ArticleController::class);

});

