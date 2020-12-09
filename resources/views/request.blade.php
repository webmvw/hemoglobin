@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="signup-form" style="margin-bottom: 30px"><!--sign up form-->
                <div class="user_card">
                    <div class="user_card_header">
                        <h4 class="user_card_title">Request for blood</h4>
                    </div>
                    <div class="user_card_body">
                        @include('partials.messages')

                @if (Route::has('login'))
                     @auth
                <form method="POST" action="{{ route('request_store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control col-sm-9 @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Your Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Phone') }}</label>
                        <div class="col-md-9">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" autofocus placeholder="Your phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ __('Blood Group') }}</label>
                        <div class="col-md-9">
                            <select class="form-control @error('blood') is-invalid @enderror" name="blood" autofocus required>
                                <option value="">Please select your blood group</option>
                                <option value="A+" {{Auth::user()->blood == 'A+' ? 'selected' : ''}}>A+</option>
                                <option value="A-" {{Auth::user()->blood == 'A-' ? 'selected' : ''}}>A-</option>
                                <option value="B+" {{Auth::user()->blood == 'B+' ? 'selected' : ''}}>B+</option>
                                <option value="B-" {{Auth::user()->blood == 'B-' ? 'selected' : ''}}>B-</option>
                                <option value="O+" {{Auth::user()->blood == 'O+' ? 'selected' : ''}}>O+</option>
                                <option value="O-"  {{Auth::user()->blood == 'O-' ? 'selected' : ''}}>O-</option>
                                <option value="AB+" {{Auth::user()->blood == 'AB+' ? 'selected' : ''}}>AB+</option>
                                <option value="AB-" {{Auth::user()->blood == 'AB-' ? 'selected' : ''}}>AB-</option>
                            </select>
                            @error('blood')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bag_quantity" class="col-md-3 col-form-label text-md-right">{{ __('Bag Quantity') }}</label>
                        <div class="col-md-9">
                            <input id="bag_quantity" type="number" class="form-control @error('bag_quantity') is-invalid @enderror" name="bag_quantity" value="" required autocomplete="date">

                            @error('bag_quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('Date') }}</label>
                        <div class="col-md-9">
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="" required autocomplete="date">

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="division" class="col-md-3 col-form-label text-md-right">{{ __('Division') }}</label>
                        <div class="col-md-9">
                            <input id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ Auth::user()->division }}" required autocomplete="division" autofocus placeholder="Your division">

                            @error('division')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="district" class="col-md-3 col-form-label text-md-right">{{ __('District') }}</label>
                        <div class="col-md-9">
                            <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ Auth::user()->district }}" required autocomplete="district" autofocus placeholder="Your district">

                            @error('district')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="street_address" class="col-md-3 col-form-label text-md-right">{{ __('Street Address') }}</label>
                        <div class="col-md-9">
                            <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ Auth::user()->street_address }}" required autocomplete="street_address" autofocus placeholder="Your street_address">

                            @error('street_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <input type="hidden" name="usertoken" value="{{ Auth::user()->edit_token }}" >

                    <button type="submit" class="btn btn-default">Request</button>
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
