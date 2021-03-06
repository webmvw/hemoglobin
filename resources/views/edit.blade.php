@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="signup-form" style="margin-bottom: 30px"><!--sign up form-->
                <div class="user_card">
                    <div class="user_card_header">
                        <h4 class="user_card_title">Update your information</h4>
                    </div>
                    <div class="user_card_body"> 

                <form method="POST" action="{{ route('update', $user->edit_token) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control col-sm-9 @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Your Name">

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
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus placeholder="Your phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="division" class="col-md-3 col-form-label text-md-right">{{ __('Division') }}</label>
                        <div class="col-md-9">
                            <input id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ $user->division }}" required autocomplete="division" autofocus placeholder="Your division">

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
                            <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ $user->district }}" required autocomplete="district" autofocus placeholder="Your district">

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
                            <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ $user->street_address }}" required autocomplete="street_address" autofocus placeholder="Your street_address">

                            @error('street_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="occupation" class="col-md-3 col-form-label text-md-right">{{ __('Occupation') }}</label>
                        <div class="col-md-9">
                            <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ $user->occupation }}" required autocomplete="occupation" autofocus placeholder="Your occupation">

                            @error('occupation')
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
                                <option value="A+" {{$user->blood == 'A+' ? 'selected' : ''}}>A+</option>
                                <option value="A-" {{$user->blood == 'A-' ? 'selected' : ''}}>A-</option>
                                <option value="B+" {{$user->blood == 'B+' ? 'selected' : ''}}>B+</option>
                                <option value="B-" {{$user->blood == 'B-' ? 'selected' : ''}}>B-</option>
                                <option value="O+" {{$user->blood == 'O+' ? 'selected' : ''}}>O+</option>
                                <option value="O-" {{$user->blood == 'O-' ? 'selected' : ''}}>O-</option>
                                <option value="AB+" {{$user->blood == 'AB+' ? 'selected' : ''}}>AB+</option>
                                <option value="AB-"  {{$user->blood == 'AB-' ? 'selected' : ''}}>AB-</option>
                            </select>
                            @error('blood')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Your Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_birth" class="col-md-3 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                        <div class="col-md-9">
                            <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ $user->date_of_birth }}" required autocomplete="date_of_birth">

                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ __('Profile Image') }}</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>
                    </div>
                </div>
            </div><!--/sign up form-->
        </div>

        @include('partials.sidebar_plate')
        
    </div>
</div>    


@endsection
