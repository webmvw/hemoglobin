@extends('admin.layouts.app');

@section('content')


<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="box-title">Unapproved Donor Review</h4>
                </div>
                <div class="card-body">
                    @include('partials.messages')
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th width="3%" class="serial">#</th>
                                    <th width="5%" class="avatar">Profile</th>
                                    <th width="15%">Name</th>
                                    <th width="10%">Date</th>
                                    <th width="50%">Review</th>
                                    <th width="17%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1;  @endphp
                                @foreach($unapproveds as $unapproved)
                                <tr>
                                    <td class="serial">@php echo $i; @endphp</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            @if($unapproved->avatar == 0)
                                            <img class="rounded-circle" src="{{ asset('images/user/avatar.png') }}" alt="admin profile" width="50px" height="50px">
                                            @else
                                            <img class="rounded-circle" src="{{ asset('images/user/'.$unapproved->avatar) }}" alt="avatar image" width="50px" height="50px">
                                            @endif
                                        </div>
                                    </td>
                                    <td><span class="name">{{ $unapproved->username }}</span></td>
                                    <td>{{ substr($unapproved->created_at, 0, 10) }}</td>
                                    <td><span class="product">{{ $unapproved->review }}</span></td>
                                    <td>
                                        <a href="{{ route('admin.review.accept', $unapproved->id) }}" onclick="return confirm('Are you sure to Accept!');" class="btn btn-success btn-sm">Accept</a>
                                        <a href="{{ route('admin.review.delete', $unapproved->id) }}" onclick="return confirm('Are you sure to Accept!');" class="btn btn-success btn-sm">Delete</a>
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
                    <h4 class="box-title">Approved Donor Review</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable2">
                            <thead>
                                <tr>
                                    <th width="3%" class="serial">#</th>
                                    <th width="5%" class="avatar">Profile</th>
                                    <th width="20%">Name</th>
                                    <th width="62%">Review</th>
                                    <th width="10%">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1;  @endphp
                                @foreach($approveds as $approved)
                                <tr>
                                    <td class="serial">@php echo $i; @endphp</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            @if($approved->avatar == 0)
                                            <img class="rounded-circle" src="{{ asset('images/user/avatar.png') }}" alt="admin profile" width="50px" height="50px">
                                            @else
                                            <img class="rounded-circle" src="{{ asset('images/user/'.$approved->avatar) }}" alt="avatar image" width="50px" height="50px">
                                            @endif
                                        </div>
                                    </td>
                                    <td><span class="name">{{ $approved->username }}</span></td>
                                    
                                    <td><span class="product">{{ $approved->review }}</span></td>
                                    <td>{{ substr($approved->created_at, 0, 10) }}</td>

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