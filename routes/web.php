<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[BlogController::class,'showHome'])->name('home');

Route::get('/showBlog/{slug}',[BlogController::class,'showBlog'])->name('page.list');

Route::get('/blogDetail/{id}',[BlogController::class,'blogDetail'])->name('page.detail');

Route::get('/viewBlog',[BlogController::class,'viewBlog'])->name('view.page');

Route::middleware(['auth'])->group(function (){

    Route::resource('items', ItemController::class);

    Route::resource('users', UserController::class);

    Route::resource('groups',GroupController::class);

    Route::resource('blogs',PagesController::class);

    Route::resource('du-lich', ItemController::class);
    Route::resource('lien-hoan', ItemController::class);
    Route::resource('su-kien', ItemController::class);
    Route::resource('tu-thien', ItemController::class);
    Route::resource('du-an-dao-tao', ItemController::class);
    Route::resource('du-an-kinh-doanh', ItemController::class);

    Route::get('/search',[ItemController::class,'search'])->name('search.item');
    Route::get('/filter',[ItemController::class,'searchItem'])->name('filter.item');

    Route::get('/quick-search', [PagesController::class, 'quickSearch'])->name('quick-search');

});

require __DIR__.'/auth.php';

