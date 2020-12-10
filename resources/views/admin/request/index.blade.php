@extends('admin.layouts.app');

@section('content')

<!-- Widgets  -->
        <div class="row mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h3>
                                        @php
                                        $Request = App\BloodRequest::get();
                                        echo $Request->count();
                                        @endphp
                                    </h3>
                                    <p>Total Blood Request</p>
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
                            <div class="col-md-4">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h3>
                                        @php
                                        $Unapproved = App\BloodRequest::where('status', 0)->get();
                                        echo $Unapproved->count();
                                        @endphp
                                    </h3>
                                    <p>Unapproved Request</p>
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
                            <div class="col-md-4">
                                <img src="images/icon.png" alt="blood icon">
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h3>
                                        @php
                                        $approved = App\BloodRequest::where('status', 1)->get();
                                        echo $approved->count();
                                        @endphp
                                    </h3>
                                    <p>Approved Request</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->




<!-- Request Area -->
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card  mb-3">
                <div class="card-header">
                    <h4 class="box-title">Unapproved Blood Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Division</th>
                                    <th>Blood</th>
                                    <th>Bag Quentity</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($unapproveds as $unapproved)
                                <tr>
                                    <td class="serial">@php echo $i; @endphp</td>
                                    <td>{{ $unapproved->name }}</td>
                                    <td>{{ $unapproved->phone }}</td>
                                    <td>{{ $unapproved->street_address }}</td>
                                    <td>{{ $unapproved->district }}</td>
                                    <td>{{ $unapproved->division }}</td>
                                    <td>{{ $unapproved->blood }}</td>
                                    <td>{{ $unapproved->bag_quantity }}</td>
                                    <td>{{ $unapproved->date }}</td>
                                    <td>
                                       <a href="{{ route('admin.accept', $unapproved->id) }}" onclick="return confirm('Are you sure to Accept!');" class="btn btn-success btn-sm">Accept</a>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
                <div class="card-footer">
                    
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="box-title">Approved Blood Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable2">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Division</th>
                                    <th>Blood</th>
                                    <th>Bag Quentity</th>
                                    <th>Date</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($approveds as $approved)
                                <tr>
                                    <td class="serial">@php echo $i; @endphp</td>
                                    <td>{{ $approved->name }}</td>
                                    <td>{{ $approved->phone }}</td>
                                    <td>{{ $approved->street_address }}</td>
                                    <td>{{ $approved->district }}</td>
                                    <td>{{ $approved->division }}</td>
                                    <td>{{ $approved->blood }}</td>
                                    <td>{{ $approved->bag_quantity }}</td>
                                    <td>{{ $approved->date }}</td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div> <!-- .request_area end -->


@endsection        