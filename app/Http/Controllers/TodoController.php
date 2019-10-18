<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTodoRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()
        ->paginate(15);

        $total_todos = Todo::count();
        $total_progress = Todo::whereStatus(0)->count();
        $total_completed = Todo::whereStatus(1)->count();

        return view('index', [
            'todos' => $todos,
            'total_todos' => $total_todos,
            'total_progress' => $total_progress,
            'total_completed' => $total_completed,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateTodoRequest $request)
    {

        $todo = new Todo;
        $todo->username = 'Web User';
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('todo.index');

    }

    public function edit(Todo $todo)
    {
        return view('update', [
            'todo' => $todo
        ]);
    }

    public function update(CreateTodoRequest $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->save();

        return back();
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
