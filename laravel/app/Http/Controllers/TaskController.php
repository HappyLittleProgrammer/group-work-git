<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{


    protected $tasks;




    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'status_name' => 'required|max:255',
            'status_desc' => 'required|max:1000',
        ]);

        $request->user()->tasks()->create([
            'status_name' => $request->status_name,
            'status_desc' => $request->status_desc,
        ]);

        return redirect('/tasks');

    }


    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}
