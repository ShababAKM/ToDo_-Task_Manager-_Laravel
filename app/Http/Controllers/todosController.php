<?php

namespace App\Http\Controllers;
use App\todo;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index()
    {
        $todos=todo::all();//(static function "all()" fetches all DB record in the todos table )
        return view('todos.index')->with('todos',$todos);
    }

    public function show($todoid)
    {
       //dd($todoid)
       $todo = Todo::find($todoid);
        return view('todos.show')->with('todo',$todo);
    }
}
