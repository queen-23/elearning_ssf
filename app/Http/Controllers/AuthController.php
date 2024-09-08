<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect('/dashboard');
        }
        return view('beranda.login');
    }
    public function postLogin(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('username', 'password');
        if (auth()->attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Login successful!');
        }
        // dd(FacadesAuth::user());
        return redirect()->back()->with('error', 'Login failed! Please try again.');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
    public function editProfile()
    {
        $user = auth()->user();
        return view('edit-profile', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        try {
            $user = \App\Models\User::find(auth()->user()->id);
            $user->name = $request->name;
            $user->username = $request->username;
            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
            return redirect()->back()->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            throw $e;
            return redirect()->back()->with('error', 'Failed to update profile!');
        }
    }
    public function dashboard()
    {
        if (auth()->user()->role == 'tutor') {
            return redirect('/tutor/kelas');
        }
        if (auth()->user()->role == 'siswa') {
            return redirect('/siswa/kelas');
        }
        return view('dashboard');
    }
    public function tes()
    {
        $datajson = file_get_contents(base_path('public/data/tes.json'));
        $data = json_decode($datajson, true);

        $data = [
            'tes' => 'awodoajda',
            'data' => 123,
        ];
        file_put_contents(base_path('public/data/tes.json'), json_encode($data));
        redirect('/data/tes.json');
    }
}
