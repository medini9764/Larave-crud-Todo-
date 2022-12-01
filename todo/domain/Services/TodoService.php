<?php
namespace domain\Services;
use App\Models\Todo;
use Illuminate\Support\Facades\Request;
    class TodoService
    {
            protected $task;
        public function __Construct()
        {
            $this->task =new Todo();
        }

        public function all()
        {
            return $this->task-all();
        }

        public function  store($data)
        {
            $this->task->create($data);

        // return redirect()->route('todo');
        }

        public function delete($task_id)
        {
                $task=$this->task->find($task_id);
                $task->delete();

        }
        public function done($task_id)
        {
            $task=$this->task->find($task_id);
            $task->done = 1;
            $task->update();

        }

        public function get($task_id)
        {
            return $this->task->find($task_id);
        }
        public function update(array $data,$task_id)
        {
            /*$task = $this->task->find($task_id);
            $task->update();*/

            $task = $this->task->find($task_id);
            $task->update($this->edit($task,$data));
        }

        public function edit(Todo $task, $data)
        {
            return array_merge($task->toArray(),$data);
        }
    }
?>
