<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }
    public function sendlogin(Request $request)
    {
        // $name=User::find($request->email);
        // return $name;
        $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        // dd(auth()->user);
        if ($user > 0) {
            session(['user' => $request->email]);
            return redirect('homepage')->with('succes', 'login Successfully');
        }
        return redirect()->back();
    }


    public function register()
    {
        return view('Admin.register');
    }
    public function sendregister(Request $request)
    {
        $user = User::create([
            'email'    => $request->email,
            'name'     => $request->name,
            'password' => sha1($request->password)
        ]);
        session(['user' => $request->email]);

        return redirect('homepage')->with('succes', 'Register Successfully');
    }

    public function logout()
    {
        Session::flush();
        return redirect('homepage');
    }
}
