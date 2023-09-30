<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $role = $request->input('role');
        $username = $request->input('username'); 
        $password = $request->input('password');
        if($role === 'user') {
            if($username === 'user' && $password === 'user_password') {

            } else {
                $authErrorMessage = 'Nome de usuário ou palavra-passe incorrecto.';
            }
        }
        if($role === 'admin') {
            if($username === 'admin' && $password === 'admin_password') {

            } else {
                $authErrorMessage = 'Nome de usuário ou palavra-passe incorrecto.';
            }
        }

        return redirect()->route('admin.login', [$authErrorMessage]);
        /*
        
        
        return view('admin.home', compact('username', 'password', 'role'));
        $userSession = session('user_id');
        session(['user_id' => $username]);
        return redirect('/admin/home')->with('userSession');
        */
        return back()->withInput();
    }
}
