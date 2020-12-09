@extends('admin.layouts.app');

@section('content')


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