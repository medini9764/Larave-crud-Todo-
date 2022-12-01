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

    public function edit(Request $request)
    {
        $response['task'] = TodoFacade::get($request['task_id']);
        return view('pages.todo.edit')->with($response);
    }

    public function update(Request $request,$task_id)
    {
        TodoFacade::update($request->all(),$task_id);
        return redirect()->back();
    }
}
