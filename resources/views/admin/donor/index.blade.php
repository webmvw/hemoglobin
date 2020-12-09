@extends('admin.layouts.app');

@section('content')


<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="box-title">All Donor Information</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Profile</th>
                                    <th>Name</th>
                                    <th>Blood</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Last Donate Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1;  @endphp
                                @foreach($donors as $donor)
                                <tr>
                                    <td class="serial">@php echo $i; @endphp</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            @if($donor->avatar == NULL)
                                            <img class="rounded-circle" src="{{ asset('images/user/avatar.png') }}" alt="admin profile" width="50px" height="50px">
                                            @else
                                            <img class="rounded-circle" src="{{ asset('images/user/'.$donor->avatar) }}" alt="avatar image" width="50px" height="50px">
                                            @endif
                                        </div>
                                    </td>
                                    <td><span class="name">{{ $donor->name }}</span></td>
                                    <td><span class="product">{{ $donor->blood }}</span></td>
                                    <td><span class="count">{{ $donor->phone }}</span></td>
                                    <td><span class="count">{{ $donor->street_address }}</span></td>
                                    <td><span class="count">{{ $donor->district }}</span></td>
                                    <td><span class="count">{{ $donor->last_donate_date }}</span></td>
                                    <td>
                                       <a href="{{ route('admin.donor.details', $donor->edit_token) }}" class="btn btn-success btn-sm">View</a>
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
        </div>
    </div>
</div> <!-- .request_area end -->


@endsection        