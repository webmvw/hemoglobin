<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BloodRequest;
use App\Review;
use File;

class HomeController extends Controller
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
        return view('home');
    }



    /**
     * this method return review page
     *
     */
    public function review(){
        return view('review');
    }
    public function review_store(Request $request){
        $request->validate([
            'review' => ['required', 'string', 'max:255'],
        ]);

        $review = new Review;
        $review->avatar = $request->avatar;
        $review->username = $request->user;
        $review->review = $request->review;
        $review->save();
        session()->flash('success', 'Review successfully!! We got it. Thanks.');
        return redirect()->route('review');
    }





    /**
     * this method return blood request page
     *
     */
    public function request(){
        return view('request');
    }


    /**
     * this method store blood request
     *
     */
    public function request_store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'blood' => ['required'],
            'bag_quantity' => ['required'],
            'date' => ['required'],
            'division' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'street_address' => ['required', 'string', 'max:255'],
        ]);

        $bloodRequest = new BloodRequest;
        $bloodRequest->name = $request->name;
        $bloodRequest->phone = $request->phone;
        $bloodRequest->blood = $request->blood;
        $bloodRequest->bag_quantity = $request->bag_quantity;
        $bloodRequest->date = $request->date;
        $bloodRequest->division = $request->division;
        $bloodRequest->district = $request->district;
        $bloodRequest->street_address = $request->street_address;
        $bloodRequest->usertoken = $request->usertoken;

        $bloodRequest->save();
        return redirect()->route('home');
    }




    /**
     * Show the application user profile edit.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($edit_token)
    {
        //$user = User::find($edit_token);
        $user = User::where('edit_token', $edit_token)->first();
        if(!is_null($user)){
            return view('edit', compact('user'));
        }
    }

    public function update(Request $request, $edit_token){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'division' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'street_address' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'blood' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'date_of_birth' => ['required'],
        ]);

        $user = User::where('edit_token', $edit_token)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->division = $request->division;
        $user->district = $request->district;
        $user->street_address = $request->street_address;
        $user->occupation = $request->occupation;
        $user->blood = $request->blood;
        $user->date_of_birth = $request->date_of_birth;

        // Profile avatar image
        if($request->hasfile('image')){
            if(File::exists('images/user/'.$user->image)){
                File::delete('images/user/'.$user->image);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/user/', $filename);

            $user->avatar = $filename;
        }

        $user->save();
        return redirect()->route('home');
        
    }

}
