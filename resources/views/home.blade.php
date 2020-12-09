@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-9">

    <div class="user_card">
        <div class="user_card_header">
            <h4 class="user_card_title">User Information.</h4>
        </div>
        <div class="user_card_body">
            <div class="profile">
                @if (Route::has('login'))
                     @auth
                    <div class="row">
                        <div class="col-md-3">
                            @if( Auth::user()->avatar == NULL)
                            <img src="{{ asset('images/user/avatar.png') }}" alt="donar profile">
                            @else
                            <img src="{{ asset('images/user/'.Auth::user()->avatar) }}" alt="donar profile">
                            @endif
                            <a href="{{ route('edit',Auth::user()->edit_token) }}" class="btn btn-sm btn-primary" style="margin-left:30px;margin-top:10px;">Edit Profile</a>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-hover">
                                <tr>
                                    <td><p><b>Name:</b></p></td>
                                    <td><p>{{ Auth::user()->name }}</p></td>
                                    <td><p><b>Street Address:</b></p></td>
                                    <td><p>{{ Auth::user()->street_address }}</p></td>
                                </tr>
                                <tr>
                                    <td><p><b>District:</b></p></td>
                                    <td><p>{{ Auth::user()->district }}</p></td>
                                    <td><p><b>Division:</b></p></td>
                                    <td><p>{{ Auth::user()->division }}</p></td>
                                </tr>
                                <tr>
                                    <td><p><b>Blood:</b></p></td>
                                    <td><p>{{ Auth::user()->blood }}</p></td>
                                    <td><p><b>Occupation:</b></p></td>
                                    <td><p>{{ Auth::user()->occupation }}</p></td>
                                </tr>
                                <tr>
                                    <td><p><b>Phone:</b></p></td>
                                    <td><p>{{ Auth::user()->phone }}</p></td>
                                    <td><p><b>Email:</b></p></td>
                                    <td><p>{{ Auth::user()->email }}</p></td>
                                </tr>
                                <tr>
                                    <td><p><b>Date of Birth:</b></p></td>
                                    <td><p>{{ Auth::user()->date_of_birth }}</p></td>
                                    <td><p><b>Last Donate Date:</b></p></td>
                                    <td><p>{{ Auth::user()->last_donate_date }}</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    @endauth
                @endif
            </div> <!-- .profile end -->

            <div class="user_card">
                <div class="user_card_header">
                    <h4 class="user_card_title">Donate History</h4>
                </div>
                <div class="user_card_body">
                <table class="table table-hover display" id="MyTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Blood</th>
                            <th>Donate Date</th>
                            <th>Bag quentity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                         @foreach(App\DonateHistory::where('donorID', Auth::user()->id)->orderBy('id', 'desc')->get() as $donateHistory)
                        <tr>
                            <td>@php echo $i; @endphp</td>
                            <td>{{ $donateHistory->name }}</td>
                            <td>{{ $donateHistory->blood }}</td>
                            <td>{{ $donateHistory->donate_date }}</td>
                            <td>{{ $donateHistory->bag_quantity }}</td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach       
                    </tbody>
                </table>
                </div>
            </div> <!-- donate_history end -->


            <div class="user_card">
                <div class="user_card_header">
                    <h4 class="user_card_title">Blood Request History</h4>
                </div>
                <div class="user_card_body">
                <table class="table table-hover display" id="MyTable2">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Blood</th>
                            <th>Request Date</th>
                            <th>Bag Quentity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(App\BloodRequest::where('usertoken', Auth::user()->edit_token)->orderBy('id', 'desc')->get() as $requestHistory)
                        <tr>
                            <td>{{ $requestHistory->name }}</td>
                            <td>{{ $requestHistory->blood }}</td>
                            <td>{{ $requestHistory->date }}</td>
                            <td>{{ $requestHistory->bag_quantity }}</td>
                            <td>
                                @if($requestHistory->status == 0)
                                Panding
                                @else
                                Accept
                                @endif
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
                </div>
            </div> <!-- blood_request_history end -->
        </div>    
    </div>        
        </div>

        @include('partials.sidebar_plate')
        
    </div>
</div>

@endsection
