<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LogActivity;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
}
