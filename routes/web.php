<?php

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

Route::get('/todo', function () {
    return Inertia::render('pages/todos/Index', [
        'data' => [
            ['id' => 1, 'title' => 'meimei1'],
            ['id' => 2, 'title' => 'meimei2'],
            ['id' => 3, 'title' => 'meimei3']
        ]
    ]); 
});