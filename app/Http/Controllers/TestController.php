<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $user = User::with(['comments', 'questions'])->find(1);
        return $user;
    }
}
