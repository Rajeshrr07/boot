<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Webpage\WebController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategorytypeController;
use App\Http\Controllers\Webpage\Components\WebviewController;


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

// Route::get('/login', function () {
//     return view('welcome');
// });



// Route::resource('webview', WebviewController::class);


Route::get('/', [WebController::class, 'index']);
Route::get('/show/{id}', [WebController::class, 'show'])->name('show');

 Route::get('search', [WebController::class,'search'])->name('search');
 Route::get('getData/{id?}', [WebController::class,'getdata'])->name('show.data');




Route::get('/admin', function () {
    return view('auth.login');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('categorytype', CategorytypeController::class);
    // Route::resource('card', CardController::class);
    // Route::resource('collapse', CollapseController::class);
});  



