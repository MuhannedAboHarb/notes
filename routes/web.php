<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [NotesController::class, 'index'])
    ->name('index');

Route::get('/create', [NotesController::class, 'create'])
    ->name('create');

Route::post('/', [NotesController::class, 'store'])
    ->name('store');

Route::get('/{id}/edit', [NotesController::class, 'edit'])
    ->name('edit');

Route::put('/{id}', [NotesController::class, 'update'])
    ->name('update');

Route::delete('/delete/{id}', [NotesController::class, 'destroy'])
    ->name('delete');






