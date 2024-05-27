<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Find the user by username
        $user = Masyarakat::where('username', $credentials['username'])->first();

        // If the user doesn't exist or the password is incorrect, return an error
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return redirect()->back()->with('error', 'Invalid username or password')->withInput();
        }

        // Redirect to the home page upon successful login
        return redirect('/home');
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




}
