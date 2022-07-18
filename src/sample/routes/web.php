<?php

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

use App\Http\Controllers\MemosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/memos', [MemosController::class, 'index'])->name('memo.list');
# ↓ こちらを無効化し、27行目(※)を有効にするとnewが補足できなくなります(お試しあれ)
Route::get('/memo/new',[MemosController::class, 'create'])->name('memo.new');
Route::get('/memo/{id}', [MemosController::class, 'show'])->name('memo.show');
# ↓ ここに書くとエラーになる(前の行↑で補足されてしまう問題)
#Route::get('/memo/new',[MemosController::class, 'create'])->name('memo.new'); # ※
Route::post('/memo',[MemosController::class, 'store'])->name('memo.store');
Route::get('/memo/{id}/delete', [MemosController::class, 'destroy'])->name('memo.delete');
