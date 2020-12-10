<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class frontpageController extends Controller
{
    public function welcome(){
    	$reviews = Review::orderBy('id', 'desc')->limit(9)->get();
    	return view('welcome', compact('reviews'));
    }
}
