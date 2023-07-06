<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    } 
    public function index()
    {
        return view('login');
    }  
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')
                        ->with('message', 'Loged in!');
        }
   
        return redirect('/login')->with('message', 'Login details are not valid!');
    }
 
    public function register()
    {
        return view('register');
    }
       
    public function registersave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect('dashboard');
    }
    public function create(array $data)
    {
      return Register::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }  
     
    public function dashboard()
    {
        
            return view('dashboard');
     
       
    }
     
    public function logOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }
}

