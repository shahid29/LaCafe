@extends('layouts.app')

@section('title','Reservation List')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Reservaton For Waiting</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" >
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                   Email
                                </th>
                                <th>
                                    Date & Time
                                </th>
                                <th>
                                   Status
                                </th>
                                <th>
                                  Action
                                </th>
                                </thead>
                                <tbody>
                                @foreach($reservation as $key=>$v_reservation)
                                    @if($v_reservation->status==0)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$v_reservation->name}}</td>
                                        <td>{{$v_reservation->phone}}</td>
                                        <td>{{$v_reservation->email}}</td>
                                        <td>{{$v_reservation->date_time}}</td>
                                            <td style="color: Red">Not Confirm</td>
                                            <td><a href="{{url('/admin/reservation/check/'.$v_reservation->id)}}">Done</a></td>
                                    </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    {{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>--}}
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>

@endpush
