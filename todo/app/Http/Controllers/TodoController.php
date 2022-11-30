<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use domain\Facades\TodoFacade;

class TodoController extends Controller
{
    protected $task;
    public function __Construct()
    {
        $this->task =new Todo();
    }

    public function index()
    {
        $response['tasks']=$this->task->all();
        return view('pages.todo.index')->with($response);
    }
    public function store(Request $request)
    {
        TodoFacade::store($request->all());
        return redirect()->back();
       // return redirect()->route('todo');
    }
    public function delete($task_id)
    {
        TodoFacade::delete($task_id);
        return redirect()->back();
    }

    public function done($task_id)
    {
        TodoFacade::done($task_id);
        return redirect()->back();
    }
}
