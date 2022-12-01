<form action="{{ route('todo.udate',$task->id) }}" method="post" enctype="multipart/form">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input class="form-control" name="title" value="{{ $task->title }}" type="text" placeholder="Enter Task" aria-label="default input example" required>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <button class="btn btn-success">Udate</button>
            </div>
        </div>
    </div>
</form>
