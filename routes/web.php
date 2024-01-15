<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'name' => 'meimei'
    ]); 
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'data' => [
            ['id' => 1, 'nama' => 'meimei1'],
            ['id' => 2, 'nama' => 'meimei2'],
            ['id' => 3, 'nama' => 'meimei3'],
        ] 
    ]); 
});


Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');