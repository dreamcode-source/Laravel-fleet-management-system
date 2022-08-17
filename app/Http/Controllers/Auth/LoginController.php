<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
        }
    
        public function store(Request $request){
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // dd($request->remember);
        
        if(auth()->attempt($request->only('email','password'),$request->remember) ){
    
            
           return redirect()->route('dashboard');
        }
            return back()->with('status','invalid login credentials');
        }
}
