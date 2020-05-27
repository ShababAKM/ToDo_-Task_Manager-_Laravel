<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }
}
