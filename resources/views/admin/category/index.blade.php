@extends('layouts.app')

@section('title','Add Category')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.Message')
                <a href="{{url('/admin/category/create')}}" class="btn btn-success">Add New</a>
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
                                    Category Name
                                </th>
                                <th>
                                    Slug
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
                                @foreach($category as $key=>$v_category)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$v_category->name}}</td>
                                        <td>{{$v_category->slug}}</td>
                                        <td>{{$v_category->created_at}}</td>
                                        <td>{{$v_category->updated_at}}</td>
                                        <td><a href="{{url('/admin/edit/category/'.$v_category->id)}}">Edit</a> |
                                            <a href="{{url('/admin/delete/category/'.$v_category->id)}}">Delete</a></td>
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
