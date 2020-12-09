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
                                    <h3>50</h3>
                                    <p>Blood Stock</p>
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
                        indexLabel: "{label} - {y}%",
                        dataPoints: [
                            { y: 55.20, label: "Total Donor" },
                            { y: 20, label: "A+" },
                            { y: 10.37, label: "A-" },
                            { y: 6.98, label: "B+" },
                            {y: 10.00, label: "B-"},
                            { y: 2.60, label: "O+" },
                            { y: 1.45, label: "O-" },
                            { y: 0.79, label: "AB+" },
                            { y: 0.79, label: "AB-" }
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
                <div class="col-md-8">
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
                                            <th class="avatar">Avatar</th>
                                            <th>Name</th>
                                            <th>Blood</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/1.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Louis Stanley</span> </td>
                                            <td> <span class="product">O+</span> </td>
                                            <td><span class="count">2</span></td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/2.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td>
                                            <td> <span class="product">AB-</span> </td>
                                            <td><span class="count">1</span></td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/3.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td> <span class="product">B+</span> </td>
                                            <td><span class="count">2</span></td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/4.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> <span class="product">A+</span> </td>
                                            <td><span class="count">2</span></td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Accept</button>
                                            </td>
                                        </tr>
                                        <tr class=" pb-0">
                                            <td class="serial">5.</td>
                                            <td class="avatar pb-0">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/6.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Johnny Stephens</span> </td>
                                            <td> <span class="product">AB+</span> </td>
                                            <td><span class="count">1</span></td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Accept</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="box-title">Unread Massage</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="avatar">Avatar</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/1.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Louis Stanley</span> </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Read</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/2.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Read</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/3.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Read</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/4.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Read</button>
                                            </td>
                                        </tr>
                                        <tr class=" pb-0">
                                            <td class="avatar pb-0">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/6.jpg') }}" alt="avatar image"></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">Johnny Stephens</span> </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Read</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .request_area end -->


@endsection        