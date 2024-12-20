<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            // Validate the incoming request data
            $validated = $request->validate([
                'user' => 'required|string',
                'password' => 'required|string',
            ]);
    
            // Log the received data for debugging (ensure this is only for development purposes)
            Log::info('Login attempt received', [
                'user' => $validated['user'],
                // Avoid logging the password in production
            ]);
    
            // Check if user exists in the database
            $user = User::where('user', $validated['user'])->first();
    
            if ($user) {
                Log::info('User found: ' . $user->name);
            } else {
                Log::info('User not found: ' . $validated['user']);
            }
    
            // Compare the raw password from the user input with the raw password stored in the database
            if ($user && $user->password === $validated['password']) {
                // Attempt to log the user in
                Auth::login($user);
    
                // Redirect to the intended page or dashboard after login
                return redirect()->intended(route('dashboard'))->with('message', 'Login successful');
            }
    
            // If the credentials are invalid, redirect back with an error message
            return Redirect::route('login')->withErrors(['Invalid credentials']);
        } catch (\Exception $e) {
            // Log the error message for debugging
            Log::error('Login Error: ' . $e->getMessage());
    
            // Return with a generic error message for the user
            return Redirect::route('login')->withErrors(['An error occurred, please try again later.']);
        }
    }
    

    // Logout method for user logout
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Redirect the user to the login page after logout
        return redirect()->route('login')->with('message', 'You have been logged out');
    }
}
