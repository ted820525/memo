<?php
// use Symfony\Component\Routing\Route;選擇點錯誤
use Illuminate\Http\Request;
use App\Memo;


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

// Route::get('/create', function () {
//     return view('welcome');
// });
Route::get('/','MemosCotroller@index')->name('index');

Route::get('/create','MemosCotroller@create')->name('create');

Route::post('/store','MemosCotroller@store')->name('store');

Route::get('/edit','MemosCotroller@edit')->name('edit');

Route::post('/update','MemosCotroller@update')->name('update');

Route::get('/delete','MemosCotroller@delete')->name('delete');



