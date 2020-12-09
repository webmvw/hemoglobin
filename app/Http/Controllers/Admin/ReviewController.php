<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
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
        $unapproveds = Review::where('status', 0)->orderBy('id', 'desc')->get();
        $approveds = Review::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.review.index', compact('unapproveds', 'approveds'));
    }


    public function accept(Request $request, $id){
        $accept = Review::find($id);
        $accept->status = 1;
        $accept->save();
        return redirect()->route('admin.review');
    }


    public function delete($id){
        $brand = Review::find($id);

        $brand->delete();
        
        session()->flash('success', 'Review has deleted successfully!!');
        return back();
    }
}
