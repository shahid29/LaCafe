@extends('layouts.app')

@section('title','Item List')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.Message')
                <a href="{{url('/admin/item/create')}}" class="btn btn-success">Add New</a>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Slider</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" >
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Item Name
                                </th>
                                <th>
                                    Category Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Updated At
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                @foreach($item as $key=>$v_item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$v_item->name}}</td>
                                        <td>{{$v_item->category->name}}</td>
                                        <td>{{$v_item->description}}</td>
                                        <td>{{$v_item->price}}</td>
                                        <td><img width="50px" height="50px" src="{{asset('public/uploads/images/'.$v_item->image)}}" alt=""></td>
                                        <td>{{$v_item->created_at}}</td>
                                        <td>{{$v_item->updated_at}}</td>
                                        <td><a href="{{url('/admin/edit/item/'.$v_item->id)}}">Edit</a> |
                                            <a href="{{url('/admin/delete/item/'.$v_item->id)}}">Delete</a></td>
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
