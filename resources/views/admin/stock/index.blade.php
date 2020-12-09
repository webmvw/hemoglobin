@extends('admin.layouts.app');

@section('content')

<!-- Widgets  -->
        <div class="row mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-6">
                                <div class="text-left">
                                    <h3>
                                        @php
                                        $donor = App\User::get();
                                        echo $donor->count();
                                        @endphp
                                    </h3>
                                    <p>Donor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-6">
                                <div class="text-left">
                                    <h3>
                                        @php
                                        $donor = App\DonateHistory::get();
                                        echo $donor->count();
                                        @endphp
                                    </h3>
                                    <p>Donate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-6">
                                <div class="text-left">
                                    <h3>
                                        @php
                                        $request = App\BloodRequest::get();
                                        echo $request->count();
                                        @endphp
                                    </h3>
                                    <p>Request</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->


        <!-- add stock section -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Add Stock</h4>
                    </div>
                    <div class="card-body">
                        @include('partials.messages')
                        <form action="{{ route('admin.stock.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Stock Id:
                                    <input type="text" name="stockid" class="form-control form-control-sm" required></p>
                                </div>
                                <div class="col-md-3">
                                   <p> Blood:
                                    <input type="blood" name="blood" class="form-control form-control-sm" required></p>
                                </div>
                                <div class="col-md-3">
                                    <p>Date:
                                    <input type="date" name="date" class="form-control form-control-sm" required></p>
                                </div>
                                <div class="col-md-3">
                                    <p><br>
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success btn-sm"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="request_area">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="box-title">Blood Request</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Name</th>
                                            <th>Blood</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            <th>Division</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .request_area end -->


@endsection        