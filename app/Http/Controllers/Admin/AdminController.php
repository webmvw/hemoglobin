<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LogActivity;
use App\User;
use App\Role;
use App\BloodRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
    	$unAcceptRequests = BloodRequest::where('status', 0)->orderBy('id', 'desc')->limit(5)->get();
    	return view('admin.index', compact('unAcceptRequests'));
    }
}
