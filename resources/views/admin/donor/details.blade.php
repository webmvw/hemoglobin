@extends('admin.layouts.app');

@section('content')


<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="box-title">Donor: {{ $donor->name }} all information.</h4>
                </div>
                <div class="card-body">

                    <!-- donor information -->
                    <div class="card mb-3">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          @if($donor->avatar == NULL)
                          <img src="{{ asset('images/user/avatar.png') }}" class="card-img" alt="admin profile">
                          @else
                          <img src="{{ asset('images/user/'.$donor->avatar) }}" class="card-img" alt="profile image">
                          @endif
                          
                        </div>
                        <div class="col-md-10">
                          <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                      <tbody>
                                        <tr>
                                          <th>Name</th>
                                          <td>: {{ $donor->name }}</td>
                                        </tr>
                                        <tr>
                                          <th>Blood</th>
                                          <td>: {{ $donor->blood }}</td>
                                        </tr>
                                        <tr>
                                          <th>Phone</th>
                                          <td>: {{ $donor->phone }}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>: {{ $donor->email }}</td>
                                        </tr>
                                      </tbody>  
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                      <tbody>
                                        <tr>
                                          <th>address</th>
                                          <td>: {{ $donor->street_address }}</td>
                                        </tr>
                                        <tr>
                                          <th>District</th>
                                          <td>: {{ $donor->district }}</td>
                                        </tr>
                                        <tr>
                                          <th>Division</th>
                                          <td>: {{ $donor->division }}</td>
                                        </tr>
                                        <tr>
                                          <th>Occupation</th>
                                          <td>: {{ $donor->occupation }}</td>
                                        </tr>
                                      </tbody>  
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                      <tbody>
                                        <tr>
                                          <th>Date Of Birth</th>
                                          <td>: {{ $donor->date_of_birth }}</td>
                                        </tr>
                                        <tr>
                                          <th>Last Donate Date</th>
                                          <td>: {{ $donor->last_donate_date }}</td>
                                        </tr>
                                        <tr>
                                          <th>Last Update</th>
                                          <td>: {{ $donor->updated_at }}</td>
                                        </tr>
                                      </tbody>  
                                    </table>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- add donate history -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="box-title">Add Donate History</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('donate.history') }}">
                                @csrf
                                <input type="hidden" name="name" value="{{ $donor->name }}">
                                <input type="hidden" name="blood" value="{{ $donor->blood }}">
                              <label for="date" class="col-form-label-sm">Date: </label>  
                              <input type="date" class="form-control mb-2 mr-sm-2 form-control-sm" id="date" name="date" required>

                              <label for="Quentity" class="col-form-label-sm">Bag Quentity: </label>  
                              <input type="number" class="form-control mb-2 mr-sm-2 form-control-sm" id="Quentity" name="quantity" required>
                              <input type="hidden" name="donarID" value="{{ $donor->id }}">
                              
                              <button class="btn btn-success btn-sm" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>        

                    <!-- donate history -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="box-title">{{ $donor->name }} Blood Donate History</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table class="table table-hover display" id="MyTable">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Name</th>
                                            <th>Blood</th>
                                            <th>Donate Date</th>
                                            <th>Bag Quentity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @php $i = 1; @endphp
                                        @foreach($donateHistorys as $donateHistory)
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
                        </div>        
                    </div>


                    <!-- Blood request history -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="box-title">{{ $donor->name }} Blood Request History</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table class="table table-hover display" id="MyTable2">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Name</th>
                                            <th>Blood</th>
                                            <th>Request Date</th>
                                            <th>Bag Quentity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($donorRequests as $donorRequest)
                                        <tr>
                                            <td>@php echo $i; @endphp</td>
                                            <td>{{ $donorRequest->name }}</td>
                                            <td>{{ $donorRequest->blood }}</td>
                                            <td>{{ $donorRequest->date }}</td>
                                            <td>{{ $donorRequest->bag_quantity }}</td>
                                            <td>
                                                @if($donorRequest->status == 0)
                                                Pending
                                                @else
                                                Accept
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>        
                            </div>
                        </div>        
                    </div>


                </div>

                <div class="card-footer">
                    <a href="" class="btn btn-success btn-sm">Print</a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .request_area end -->


@endsection        