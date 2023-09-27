<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $name = $request->input('username');
        $password = $request->input('password');
        return $name . " " . $password;
    }
}
