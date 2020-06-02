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

    public function show(/*$todoId*/todo $todo)
    {
       //dd($todoid)
       //$todo = Todo::find($todoid);
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
       session()->flash('success', 'Task Created Successfully');
       return redirect('/todos');
    }
    public function edit(todo $todo)
    {
       //dd($todoid)
        //$todo=Todo::find($todoId);
        session()->flash('success', 'Task Editted Successfully');
        return view('todos.edit')->with('todo',$todo);
    }

    public function update(todo $todo)
    {
       $this->validate(request(),['name'=>'required','description'=>'required']);
       $data=request()->all(); 
       //$todo=todo::find($todoId); 
       $todo->name=$data['name'];
       $todo->description=$data['description'];
       $todo->save();
       session()->flash('success', 'Task Updated Successfully');
       return redirect('/todos');
    }
    public function delete(todo $todo)
    {
       //$todo=todo::find($todoId); 
       $todo->delete();
       session()->flash('success', 'Task Deleted Successfully');
       return redirect('/todos');
    }
}