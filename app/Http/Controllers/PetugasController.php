<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Petugas;

class PetugasController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_petugas' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:petugas,username',
            'password' => 'required|string|min:8|confirmed',
            'id_level' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $petugas = Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'id_level' => $request->id_level
        ]);

        return redirect('/admin/admin-data-officer')->with('success', 'Registration successful. Please log in.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }


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

        // Attempt to authenticate using the 'petugas' provider
        if (Auth::guard('petugas')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('petugas')->user();

            Log::info('User logged in successfully', ['user' => $user]);
            return redirect()->intended('admin/admin-dashboard')->with('success', 'Login successful');

        }

        Log::error('Authentication failed', ['credentials' => $credentials]);
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        // Log out the authenticated user from the 'petugas' guard
        Auth::guard('petugas')->logout();

        // Invalidate the current session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the login page with a success message
        return redirect()->route('login.view.petugas')->with('success', 'You have been logged out.');

    }

    public function index()
    {
        $petugas = Petugas::all();
        return view('CRUD-PAGE.addPetugas', ['petugas' => $petugas]);
    }

    public function delete($id)
    {
        $petugas = Petugas::findOrFail($id);

        try {
            $petugas->delete();
            return redirect()->back()->with('success', 'Petugas deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Petugas. Please try again.');
        }
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);

        $request->validate([
            'nama_petugas' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'id_level' => 'required|integer',
        ]);

        $petugas->nama_petugas = $request->input('nama_petugas');
        $petugas->username = $request->input('username');
        $petugas->password = Hash::make($request->input('password'));
        $petugas->id_level = $request->input('id_level');

        try {
            $petugas->save();
            return redirect()->back()->with('success', 'Petugas updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Petugas. Please try again.');
        }
    }




}

