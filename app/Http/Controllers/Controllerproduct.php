<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use products;
use DB;

class Controllerproduct extends Controller
{
    public function show(){
    	return view('product');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'product' => 'min:10|max:150',
    		'Shipping_Address' => 'min:10|max:150'
    	]);
    	$data = array();
    	$data['product'] = $request->product;
    	$data['Shipping_Address'] = $request->Shipping_Address;
    	$data['price'] = $request->price;
        $tambah_balance = DB::table('products')->insert($data);
        return redirect()->route('payment')
                            ->with('success','Product Created Succesfully');

    }
}
