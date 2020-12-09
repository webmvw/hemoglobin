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
    	$stocks = Stock::where('status', 0)->orderBy('id', 'desc')->get();
    	$sells = Stock::where('status', 1)->orderBy('id', 'desc')->get();
    	return view('admin.stock.index', compact('stocks', 'sells'));
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

    public function sell($id){
    	$sell = Stock::find($id);
    	$sell->status = 1;
    	$sell->sell_date = date("F j, Y");
    	$sell->save();
    	return back();
    }

    public function delete($id){
    	$delete = Stock::find($id);
    	$delete->delete();
    	return back();
    }
}
