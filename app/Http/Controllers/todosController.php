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

    public function create()
    {
       //dd($todoid)
        return view('todos.create');
    }

    public function store()
    {
       $this->validate(request(),['name'=>'required','description'=>'required']); 
       $data=request()->all();
       $todo = new todo();
       $todo->name=$data['name'];
       $todo->description=$data['description'];
       $todo->completed=false;
       $todo->save();

       return redirect('/todos');
    }
    public function edit($todoId)
    {
       //dd($todoid)
        $todo=Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo);
    }

    public function update($todoId)
    {
       $this->validate(request(),['name'=>'required','description'=>'required']);
       $data=request()->all(); 
       $todo=todo::find($todoId); 
       $todo->name=$data['name'];
       $todo->description=$data['description'];
       $todo->save();
       return redirect('/todos');
    }
}
