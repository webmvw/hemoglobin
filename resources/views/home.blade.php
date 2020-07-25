@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-9">
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

            <div class="recent_donate_history">
                <h2 class="title">Donate History</h2>
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
                        <tr>
                            <td>1</td>
                            <td>Md. Masud Rana</td>
                            <td>O+</td>
                            <td>12/08/2020</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Md. Sakib Babu</td>
                            <td>O+</td>
                            <td>12/08/2020</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Md. Sumon Mia</td>
                            <td>O+</td>
                            <td>12/08/2020</td>
                            <td>1</td>
                        </tr>       
                    </tbody>
                </table>
            </div> <!-- .recent_donate_history end -->

            <div class="blood_request_history" style="margin-top:20px;margin-bottom: 30px">
                <h2 class="title">Blood Request History</h2>
                <table class="table table-hover display" id="MyTable">
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
                        @foreach(App\BloodRequest::where('usertoken', Auth::user()->edit_token)->get() as $requestHistory)
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
            </div> <!-- .blood_request_history end -->
        </div>

        @include('partials.sidebar_plate')
        
    </div>
</div>

@endsection
