<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;
use App\Http\Requests\ValidateRegister;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm() 
    {
        return view('auth.register');
    }

    /**
     * Handle the registration of a new employee.
     *
     * @param  ValidateEmployee  $request
     * @return RedirectResponse
     */
    public function registerUser(ValidateRegister $request)
    {
        $hashedPassword = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);
        return back()->with('success', 'Registration Successful!..');
    }

    /**
     * Display the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm() 
    {
        return view('auth.login');
    }

    /**
     * Handle the employee login.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function authenticateUser(Request $request)
    {
        $loginCredentials = $request->only('username', 'password');
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid login credentials...');
        }
    }
    
    /**
     * Log the user out of the application.
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
