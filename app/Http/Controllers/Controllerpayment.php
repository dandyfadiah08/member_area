<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use payments;
use DB;
class Controllerpayment extends Controller
{
    public function show(){
    	return view('payment');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'Order_No' => 'min:11|max:11'
    	]);
    	$data = array();
    	$data['Order_No'] = $request->Order_No;
        $tambah_balance = DB::table('payments')->insert($data);
        return redirect()->route('order')
                            ->with('success','Order Created Succesfully');

    }
}
