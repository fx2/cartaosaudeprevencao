<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use App\Traits\ApiControllerTrait;

class UserController extends Controller
{
    use ApiControllerTrait;

    public function __construct(User $user){
        $this->model = $user;
    }
}
