<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Str;
use DB;
use Carbon\Carbon;

class Login extends Controller
{
    public function index(){
        return view('user.Login');
    }

    public function authenticate(Request $request){
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            // $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
        // dd($request->all());
        return redirect()->route('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
