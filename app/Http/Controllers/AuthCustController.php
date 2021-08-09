<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthCustController extends Controller
{
    public function index()
    {
        return view('landingpage.login');
    }

    public function registrasi()
    {
        return view('login.register');
    }

    public function registrasiCust(Request $request)
    {
        // return $request;

        $request->validate(
            [
                'name' => 'required|min:5|max:30',
                'address' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
        );

        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ]
        );

        return redirect('/');      
    }

    public function loginCust(Request $request){
        $request->validate(
            [             
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
        ); 

        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($user);
        if(Auth::check()){
            return redirect('/');
        }else
        {
            return redirect('/loginCust');
        }
    }

    public function logoutCust(){
        Auth::logout();
        return redirect('/');
    }
}

