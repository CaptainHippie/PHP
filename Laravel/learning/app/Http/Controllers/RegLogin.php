<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegLogin extends Controller
{
    public function registration(){
        return view('reglogin.register');
    }
    public function adduser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:15'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $res = $user->save();
        if($res){
            return back()->with('success', 'Registered Successfully!');
        } else {
            return back()->with('fail', 'Registered Failed!');
        }
    }
    public function login(){
        return view('reglogin.login');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
            if ($user->password == $request->password){
                $request->session()->put('loginID', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Incorrect Password!');
            }
        } else {
            return back()->with('fail', 'No User Found!');
        }
    }
    public function dashboard(){
        $user = User::where('id','=',session('loginID'))->first();
        return view('reglogin.dashboard', compact('user'));
    }
    public function logout(){
        if(session()->has('loginID')){
            session()->pull('loginID');
        }
        return redirect('login');
    }
}
