<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Traits\ApiControllerTrait;
use Illuminate\Http\Request;
use App\Traits\CrudControllerTrait;

class TaskController extends Controller
{
    use ApiControllerTrait;

    public function __construct(Task $task){
        $this->model = $task;
        $this->path = 'task';
    }
}
