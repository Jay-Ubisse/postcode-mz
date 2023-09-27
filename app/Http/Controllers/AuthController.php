<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $role = $request->input('role');
        return view('admin.home',  compact('username', 'password', 'role'));
    }
}
