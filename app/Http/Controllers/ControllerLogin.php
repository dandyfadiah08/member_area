<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ControllerLogin extends Controller
{
    public function show(){
    	return view('Login.login');
    }
    public function login(Request $request){
    	$email = $request->email;
        $password = $request->password;
    	$data = User::where('email',$request->email)->firstOrFail();
    	if ($data) {
            $request->session()->put('data',$request->input());
           if($email==$data->email&&$password==$data->password){

                session(['berhasil_login' => true]);
                return redirect('/order');
            }
            else{
                return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }else{
            return redirect('/login')->with('alert','Password atau Email, Salah !');
        }
    }
    public function logout(Request $request){
 		$request->session()->flush();
 		return redirect('/');
    }
}
