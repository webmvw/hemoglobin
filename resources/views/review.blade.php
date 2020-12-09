@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="signup-form" style="margin-bottom: 30px"><!--sign up form-->
                <div class="user_card">
                    <div class="user_card_header">
                        <h4 class="user_card_title">Write your true Review.</h4>
                    </div>
                    <div class="user_card_body">
                        @include('partials.messages')

                @if (Route::has('login'))
                     @auth
                <form method="POST" action="{{ route('review_store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your Review" rows="10" name="review" required></textarea>
                    </div>
                    
                    @if(Auth::user()->avatar == NULL)
                    <input type="hidden" value="0" name="avatar">
                    @else
                    <input type="hidden" value="{{Auth::user()->avatar }}" name="avatar">
                    @endif
                    <input type="hidden" value="{{Auth::user()->name }}" name="user">

                    <button type="submit" class="btn btn-default">Review</button>
                </form>
                    @endauth
                @endif
                    </div>
                </div>
            </div><!--/sign up form-->
        </div>

        @include('partials.sidebar_plate')

    </div>
</div>    


@endsection
