<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use balances;
use DB;

class ControllerPrepaidBalance extends Controller
{
    public function show(){
    	return view('prepaid-balance');
    }
    
    public function store(Request $request){
    	$this->validate($request,[
    		'mobile' => 'min:6|max:11'
    	]);
    	$data = array();
    	$data['mobile'] = "0".$request->mobile;
    	$data['isi'] = $request->isi;
        $tambah_balance = DB::table('balances')->insert($data);
        return redirect()->route('product')
                            ->with('success','Top Up Created Succesfully');

    }
}
