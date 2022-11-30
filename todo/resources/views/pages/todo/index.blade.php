@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My Todo List</h1>
        </div>
        <div class="col-lg-12 mt-5">
            <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" name="title" type="text" placeholder="Default input" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-5">
                <div class="table">
                    <table class="table table-success table-stried">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$task->title}}</td>
                                <td>
                                    @if ($task->done == 0)
                                        <span class="bade bg-warning">Not Comleted</span>
                                    @else
                                        <span class="bade bg-success">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('todo.delete',$task->id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{route('todo.done',$task->id)}}" class="btn btn-success"><i class="far fa-check-circle"></i></a>
                                </td>
                            </tr>       
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>

    </div>
</div>
@endsection
@push('css')
<style>
    .page-title{
        padding-top: 15vh;
        font-size: 4rem;
        color: #0bf345;
    }
</style>
@endpush

