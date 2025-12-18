<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App;

class AuthController extends Controller
{   
    function loginForm(){
        return view('login');
    }

    function login(Request $request){

        $admin = ['adminnn1@library.com','adminnn2@library.com'];
        

        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        

        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            if(in_array($request->email, $admin)){
                $role = 'admin';
            }else{
                $role = 'member';
            }

            session([
                'user_id'=>$user->id,
                'name'=>$user->name,
                'email'=>$user->email,
                'role' => $role
            ]);

            if($role == 'admin'){
                return redirect()->route('admin-page')->with('success', 'Welcome Admin!');
            }else{
                return redirect('/')->with('success','Welcome back!');
            }
            
        }

        return back()->with('error','check your email and password');

    }
    
    function registrationForm(){
        return view('register');
    }

    function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:8',
                'regex:/[A-Z]/',
            ],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user-> email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('login')->with('success','Registration sucess, please login');
    }

    function  logout(Request $request){
        
        $request->session()->forget('user_id');
        
        return redirect()->route('loginForm')->with('success','Logged out');
    }

    
}
