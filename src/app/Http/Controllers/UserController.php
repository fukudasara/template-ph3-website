<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;


class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

}
