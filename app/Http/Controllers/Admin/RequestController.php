<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BloodRequest;

class RequestController extends Controller
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

    
    public function index()
    {
    	$unapproveds = BloodRequest::where('status', 0)->orderBy('id', 'desc')->get();
    	$approveds = BloodRequest::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.request.index', compact('unapproveds', 'approveds'));
    }

    public function accept(Request $request, $id){
    	$accept = BloodRequest::find($id);
    	$accept->status = 1;
    	$accept->save();
    	return redirect()->route('admin.request');
    }
}
