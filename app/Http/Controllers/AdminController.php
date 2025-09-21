<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:20'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email)->first();
        if($user && Hash::check($password, $user->password)){
            Auth::login($user);
            return response()->json(['status'=>true,'url'=>url('admin/portfolios')]);
        }
        return response()->json(['status'=>false]);
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
