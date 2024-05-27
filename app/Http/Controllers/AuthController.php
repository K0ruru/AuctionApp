<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed for login request', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('username', 'password');

        // Attempt to authenticate using the 'masyarakat' guard
        if (Auth::guard('masyarakat')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('masyarakat')->user();
            Log::info('User logged in successfully', ['user' => $user]);

            return redirect()->intended('/home')->with('success', 'Login successful');
        }

        Log::error('Authentication failed', ['credentials' => $credentials]);
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:masyarakat',
            'password' => 'required|string|min:8|confirmed',
            'telp' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $masyarakat = Masyarakat::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
        ]);

        return redirect('/')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        Auth::guard('masyarakat')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.view.masyarakat')->with('success', 'You have been logged out.');
    }


}
