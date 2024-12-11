<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('todo_list',compact('tasks'));
    }

    public function create()
    {
        return view('add_todo');
    }

    public function store(TodoRequest $todoRequest)
    {
        $validate = $todoRequest->validated();
        Task::create($validate);
        return redirect()->back()->with('status','To Do Item Added Successfully');
    }
    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        return view('update_todo', compact('task'));
    }
    

}
