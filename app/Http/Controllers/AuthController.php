<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
    	return view('authenticate.login');
        // return redirect('/dashboard');
    }

    public function loginAction(Request $request){
        // dd($request->all());
        // else{
        //     return redirect('/login')->with('message','Incorrect email or password !');
        // }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'  
        ]);
        $user = User::where('email','=', $request->email)->first();
        
        if($user){
            $credentials = $request->only('email', 'password');
            if ( Auth::attempt($credentials))  {
                // session(['login' => true]);
                $request->session()->put('LoggedUser', $user->id);
                // $request->session()->regenerate();
                return redirect('/dashboard');
            }
            else{
                return back()->with('fail','Incorrect your password !');
            }
        }
        else{
            return back()->with('fail','No Account Found for this email !');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
    	Auth::logout();
    	return redirect('/login');
    }
}
