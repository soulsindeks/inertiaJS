<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function index() {
        $data = Todo::all();
        return Inertia::render('pages/todos/Index', [
            'data' => $data
        ]);
    }

    function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
        ]);

        Todo::create($data);
        return redirect()->back();
    }
    
}
