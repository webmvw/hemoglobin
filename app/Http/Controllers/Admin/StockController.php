<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use PDF;

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



    /**
     * Show stock and sell information
     * 
     */
    public function index(){
    	$stocks = Stock::where('status', 0)->orderBy('id', 'desc')->get();
    	$sells = Stock::where('status', 1)->orderBy('id', 'desc')->get();
    	return view('admin.stock.index', compact('stocks', 'sells'));
    }




    /**
     * stock data store 
     * 
     */
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





    /**
     * update data stock to sell
     * 
     */
    public function sell($id){
    	$sell = Stock::find($id);
    	$sell->status = 1;
    	$sell->sell_date = date("F j, Y");
    	$sell->save();
    	return back();
    }





    /**
     * delete data in a stock
     * 
     */
    public function delete($id){
    	$delete = Stock::find($id);
    	$delete->delete();
    	return back();
    }





    /**
     * Show stock information to print pdf file
     * 
     */
    public function stockPdf(){
        $stocks = Stock::where('status', 0)->orderBy('id', 'desc')->get();
        $count = $stocks->count();
        $date = date("F j, Y");

        $table = "<center><h1 style='color:green;margin-top:0px;margin-bottom:10px;border-bottom:2px solid green;padding-bottom:3px'>Stock Information</h1></center>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";
        
        $table .= "<style type='text/css'>tr:nth-child(odd){background:#dddfe2}</style><table border='1' style='border-collapse:collapse;width:100%' cellpadding='5px'><thead><tr style='background:#f4f4f4'><th>SL</th><th>Stock Id</th><th>Blood</th><th>Date</th></tr></thead><tbody>";
            $i = 1;
            foreach ($stocks as $stock) {
                $table .= "<tr>";
                    $table .= "<td>".$i."</td>";
                    $table .= "<td>".$stock->stockid."</td>";
                    $table .= "<td>".$stock->blood."</td>";
                    $table .= "<td>".$stock->date."</td>";
                $table .= "</tr>";
                $i++;
            }
                
        $table .= "</tbody></table>"; 
        $table .= "<div style='width:100%;height:2px;background:green'></div>";
        $table .= "<h3 align='right'>Total Stock: <b style='color:green'>".$count."</b><h3>";
        $table .= "<h3 align='left'>Print Date: <b style='color:green'>".$date."</b><h3>";

        $pdf = PDF::loadHtml($table);
        return $pdf->stream();

    }




    /**
     * Show sell information to print pdf file
     * 
     */
    public function sellPdf(){
        $sells = Stock::where('status', 1)->orderBy('id', 'desc')->get();
        $count = $sells->count();
        $date = date("F j, Y");

        $table = "<center><h1 style='color:green;margin-top:0px;margin-bottom:10px;border-bottom:2px solid green;padding-bottom:3px'>Sell Information</h1></center>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";
        
        $table .= "<style type='text/css'>tr:nth-child(odd){background:#dddfe2}</style><table border='1' style='border-collapse:collapse;width:100%' cellpadding='5px'><thead><tr style='background:#f4f4f4'><th>SL</th><th>Stock Id</th><th>Blood</th><th>Sell Date</th></tr></thead><tbody>";
            $i = 1;
            foreach ($sells as $sell) {
                $table .= "<tr>";
                    $table .= "<td>".$i."</td>";
                    $table .= "<td>".$sell->stockid."</td>";
                    $table .= "<td>".$sell->blood."</td>";
                    $table .= "<td>".$sell->sell_date."</td>";
                $table .= "</tr>";
                $i++;
            }
                
        $table .= "</tbody></table>"; 
        $table .= "<div style='width:100%;height:2px;background:green'></div>";
        $table .= "<h3 align='right'>Total Stock: <b style='color:green'>".$count."</b><h3>";
        $table .= "<h3 align='left'>Print Date: <b style='color:green'>".$date."</b><h3>";

        $pdf = PDF::loadHtml($table);
        return $pdf->stream();

    }


}
