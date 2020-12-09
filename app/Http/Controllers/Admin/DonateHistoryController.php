<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DonateHistory;
use App\User;

class DonateHistoryController extends Controller
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


    
	public function store(Request $request){
		$request->validate([
            'date' => ['required'],
            'quantity' => ['required'],
        ]);

        $DonateHistory = new DonateHistory;
        $DonateHistory->name = $request->name;
        $DonateHistory->blood = $request->blood;
        $DonateHistory->donate_date = $request->date;
        $DonateHistory->bag_quantity = $request->quantity;
        $DonateHistory->donorID = $request->donarID;

        $DonateHistory->save();

        $user = User::find($request->donarID);
        $user->last_donate_date = $request->date;
        $user->save();

        return back();
	}
}
