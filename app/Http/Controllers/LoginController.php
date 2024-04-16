<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function create(){
        return view('Auth.login');
    }
    /**
     * this method authenticates a user by their password and email
     */
    public function authenticate(Request $request):RedirectResponse{
        $data= Validator::make($request->all(),[
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        // dd($data);
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email'=>"the provided credential do not match ou record.",
        ])->onlyInput('email');

        
    }

    /**
     * this method allows you to disconnect the user from the page
     */
    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

}
