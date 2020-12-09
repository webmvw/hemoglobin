<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BloodRequest;
use App\donateHistory;

class DonorController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donors = User::orderBy('id', 'desc')->get();
        return view('admin.donor.index')->with('donors', $donors);
    }



    public function details($edit_token){
        $donor = User::where('edit_token', $edit_token)->first();
        $donorRequests = BloodRequest::where('usertoken', $edit_token)->orderBy('id', 'desc')->get();
        $donateHistorys = donateHistory::where('donorID', $donor->id)->orderBy('id', 'desc')->get();
        return view('admin.donor.details', compact('donor', 'donorRequests', 'donateHistorys'));
        
    }
}
