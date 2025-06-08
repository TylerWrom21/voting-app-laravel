<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:users,name',
            'password' =>'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
            // 'password' => 'The password must be at least 6 characters.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
