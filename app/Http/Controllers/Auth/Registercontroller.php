<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function index(){
        return view('Auth.register');
        }
    
        public function store(Request $request){
            $request->validate([
                'name' => 'required|min:1|max:50',
                'email'=>'required|email|min:0|max:50|unique:users',
                'password'=>'required|confirmed',
            ]);
    
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
    
        if(auth()->attempt($request->only('email','password'))){
    
            return redirect()->route('dashboard');
        }
        
        }
}
