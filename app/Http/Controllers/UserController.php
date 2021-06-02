<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        echo 'user';
    }

    public function show(User $user)
    {
        echo 'test';
        dd($user);
    }
}
