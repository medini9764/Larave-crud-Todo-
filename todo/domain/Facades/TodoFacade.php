<?php
    namespace domain\Facades;
    use Illuminate\Support\Facades\Facade;
    use domain\Services\TodoService;

    class TodoFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return TodoService::class;
        }
    }
?>
