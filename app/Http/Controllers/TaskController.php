<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('task_items', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|integer'
        ]);

        $newTask = new Task();
        $newTask->title = $request->input('title');
        $newTask->description = $request->input('description');
        $newTask->status = $request->input('status');

        $newTask->save();
        return redirect()->route('task.index');
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
    public function edit(string $id)
    {
        //\
        $task = Task::findOrFail($id);
        $tasks = Task::all();
        return view('edit', compact('task', 'tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $task = Task::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|integer'
        ]);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->status = $request->input('status');

        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
