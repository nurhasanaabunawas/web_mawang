<?php

namespace App\Http\Controllers;

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
        return view('user.login');
    }

    public function postlogin (Request $request){
        $credentials = $request->validate([
            'nama' => ['required'],
            'password' => ['required'],
        ]);
        // dd($request->all());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.index');

        }
        return redirect()->route('dashboard.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
