<?php

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

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\BooksController;

//本ダッシュボード表示
Route::get('/', [BooksController::class, 'index']);

//登録処理
Route::post('/books', [BooksController::class, 'store']);

//更新画面
Route::post('/booksedit/{books}', [BooksController::class, 'edit']);

//更新処理
Route::post('/books/update', [BooksController::class, 'update']);

//削除処理
Route::delete('/book/{book}', [BooksController::class, 'destroy']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

