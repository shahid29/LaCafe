@extends('layouts.app')

@section('title','Message List')

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
                        <h4 class="card-title ">All Message</h4>
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
                                   Email
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                @foreach($message as $key=>$v_message)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$v_message->name}}</td>
                                        <td>{{$v_message->email}}</td>
                                        <td>{{$v_message->subject}}</td>
                                        <td><a href="{{url('/admin/view/message/'.$v_message->id)}}">View</a> |
                                            <a href="{{url('/admin/delete/message/'.$v_message->id)}}">Delete</a></td>
                                    </tr>
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
