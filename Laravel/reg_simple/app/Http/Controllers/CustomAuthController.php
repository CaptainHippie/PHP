<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class CustomAuthController extends Controller
{
    //
    public function userlogin(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.register');
    }
    public function register_click(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,mail',
            'uname'=>'required|unique:users,usernm',
            'passwd'=>'required|min:5|max:15',
        ]);
        $user = new User();
        $user->fname = $request->name;
        $user->mail = $request->email;
        $user->usernm = $request->uname;
        $user->pw = $request->passwd;
        $yes = $user->save();
        if($yes){
            return back()->with('success','You have successfully registered');
        }else{
            return back()->with('fail','Registration failed');
        }
    }
    public function login_click(Request $request){
        $request->validate([
            'uname'=>'required',
            'passwd'=>'required|min:5|max:15',
        ]);
        $user = User::where('usernm','=',$request->uname)->first();
        if($user){
            if(($user->pw) == ($request->passwd)){
                $request->session()->put('loginID',$user->id);
                return redirect('userhome');
            }else{
                return back()->with('pfail','Incorrect password');
            }
        }else{
            return back()->with('no_user','Username not found');
        }
    }
    public function login_success(){
        $data = array();
        if(session()->has('loginID')){
            $data = User::where('id','=',session('loginID'))->first();
        }
        return view('auth.userhome',compact('data'));
    }
    public function logout(){
        if(session()->has('loginID')){
            session()->pull('loginID');
        }
        return redirect('login');
    }
}
