@extends('admin.layouts.app');

@section('content')

<!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
                                        $review = App\Review::get();
                                        echo $review->count();
                                        @endphp
                                    </h3>
                                    <p>Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->


        <!-- chart -->
        <div class="chart">
            <script>
                window.onload = function () {

                var options = {
                    title: {
                        text: "Hemoglobin Blood Bank System"
                    },
                    subtitles: [{
                        text: ""
                    }],
                    animationEnabled: true,
                    data: [{
                        type: "pie",
                        startAngle: 40,
                        toolTipContent: "<b>{label}</b>: {y}%",
                        showInLegend: "true",
                        legendText: "{label}",
                        indexLabelFontSize: 16,
                        indexLabel: "{label} : {y}%",
                        dataPoints: [
                            @php
                            $request = App\User::get();
                            echo "{ y: ".$request->count().", label: 'Total Donor' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'A+')->get();
                            echo "{ y: ".$request->count().", label: 'A+' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'A-')->get();
                            echo "{ y: ".$request->count().", label: 'A-' },";
                            @endphp
                            
                            @php
                            $request = App\User::where('blood', 'B+')->get();
                            echo "{ y: ".$request->count().", label: 'B+' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'B-')->get();
                            echo "{ y: ".$request->count().", label: 'B-' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'O+')->get();
                            echo "{ y: ".$request->count().", label: 'O+' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'O-')->get();
                            echo "{ y: ".$request->count().", label: 'O-' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'AB+')->get();
                            echo "{ y: ".$request->count().", label: 'AB+' },";
                            @endphp

                            @php
                            $request = App\User::where('blood', 'AB-')->get();
                            echo "{ y: ".$request->count().", label: 'AB-' }";
                            @endphp
                        ]
                    }]
                };
                $("#chartContainer").CanvasJSChart(options);

                }
                </script>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div> <!-- .chart end -->


        <div class="request_area">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
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
                                        @php $i = 1; @endphp
                                        @foreach($unAcceptRequests as $unAcceptRequest)
                                        <tr>
                                            <td>@php echo $i; @endphp</td>
                                            <td>{{ $unAcceptRequest->name }}</td>
                                            <td>{{ $unAcceptRequest->blood }}</td>
                                            <td>{{ $unAcceptRequest->bag_quantity }}</td>
                                            <td>{{ $unAcceptRequest->date }}</td>
                                            <td>{{ $unAcceptRequest->phone }}</td>
                                            <td>{{ $unAcceptRequest->street_address }}</td>
                                            <td>{{ $unAcceptRequest->district }}</td>
                                            <td>{{ $unAcceptRequest->division }}</td>
                                            <td><a href="{{ route('admin.accept', $unAcceptRequest->id) }}" class="btn btn-success btn-sm">Accept</a></td>
                                        </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .request_area end -->


@endsection        