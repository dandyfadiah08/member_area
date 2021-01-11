<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ControllerRegister extends Controller
{
    public function show(){
    	return view('Login.register');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'password' => 'min:6'
    	]);
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['password'] = $request->password;

    	$tambah = DB::table('users')->insert($data);
    	return redirect()->route('login')
    						->with('success','Member Created Succesfully');    } 

}
