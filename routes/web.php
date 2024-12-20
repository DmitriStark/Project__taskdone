<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController; // Import the MessageController
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route to redirect '/' to '/login' if not authenticated
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard'); // Redirect to dashboard if logged in
    } else {
        return redirect()->route('login'); // Redirect to login if not logged in
    }
});

// Route to display the login form (GET request)
Route::get('/login', function () {
    return view('login'); // Return the login view (login.blade.php)
})->name('login');

// Route to handle login form submission (POST request)
Route::post('/login', [AuthController::class, 'login']);

// Route to load the dashboard page (this route is protected by the 'auth' middleware)
Route::get('/dashboard', [MessageController::class, 'index'])->middleware('auth')->name('dashboard');

// Route for logging out (GET request)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
