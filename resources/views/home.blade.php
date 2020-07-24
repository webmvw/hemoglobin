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
        </div>

        <div class="col-sm-3">
            <div class="single_plate row">
                <span class="col-md-3 color1">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>30</h2>
                    <p>A+ Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color2">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>17</h2>
                    <p>A- Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color3">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>30</h2>
                    <p>B+ Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color4">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>20</h2>
                    <p>B- Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color1">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>60</h2>
                    <p>O+ Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color2">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>19</h2>
                    <p>O- Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color3">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>36</h2>
                    <p>AB+ Donor</p>
                </div>
            </div>
            <div class="single_plate row">
                <span class="col-md-3 color4">
                    <img src="{{ asset('images/icon.png')}}" alt="image icon">
                </span>
                <div class="col-md-9">
                    <h2>39</h2>
                    <p>AB- Donor</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
