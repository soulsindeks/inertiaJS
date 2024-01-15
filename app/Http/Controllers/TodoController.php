<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function index() {
        return Inertia::render('pages/todos/Index', [
            'data' => [
                ['id' => 1, 'title' => 'meimei1'],
                ['id' => 2, 'title' => 'meimei2'],
                ['id' => 3, 'title' => 'meimei3']
            ]
        ]);
    }

    function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
        ]);

        Todo::created($data);
        return redirect();
    }
    
}
