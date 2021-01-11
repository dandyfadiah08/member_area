<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use orders;
use DB;

class Controllerorder extends Controller
{
    public function show(){
     	$orders = DB::table('orders')->get();
		$order = DB::table('orders')->count();
       return view('order',compact('orders','order'));
    }

}
