<?php

namespace App\Http\Controllers;


use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth()->id())->get();
        return view('todo_list',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_todo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $todoRequest)
    {
        $validate = $todoRequest->validated();
        $validate['user_id'] = auth()->id();
        Task::create($validate);
        return redirect()->back()->with('status','To Do Item Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

        //$task = Task::find(Task);
        return view('update_todo',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Task $task, TodoRequest $todoRequest)
    {
        $validate = $todoRequest->validated();
        $task->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
        ]);
        return redirect()->route('task.index')->with('status', 'To Do Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back()->with('status', 'To Do Item Deleted Successfully');
    }

    public function statusToggle(Task $task){
        $task->status = $task->status == '0' ? '1' : '0';
        $task->save();
        return redirect()->back()->with('status', 'To Do Item Status Changed Successfully');
    }
}
