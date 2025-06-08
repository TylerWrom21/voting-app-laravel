<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function() {
//         if (auth()->user()->role === 'admin') {
//             return redirect()->route('admin.dashboard');
//         }
//         return redirect()->route('dashboard');
//     })->name('dashboard');
//     Route::get('/profile', function () {
//         return view('profile');
//     })->name('profile');

//     Route::get('/votes', function () {
//         return view('votes');
//     })->name('votes');
// });
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin_dashboard');
    })->middleware('check.role:admin')->name('admin.dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('check.role:user')->name('dashboard');
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class, 'register'])->name('register');