<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('admin.stock.index');
    }

    public function store(Request $request){
    	$request-> validate([
    		'stockid' => ['required'],
    		'blood'   => ['required'],
    		'date'    => ['required'],
    	]);

    	$stock = new Stock;
    	$stock->stockid = $request->stockid;
    	$stock->blood = $request->blood;
    	$stock->date = $request->date;
    	$stock->save();
    	session()->flash('success', 'Data Stock success!!');
    	return back();
    }
}
