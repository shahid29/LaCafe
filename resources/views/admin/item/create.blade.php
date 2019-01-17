@extends('layouts.app')

@section('title','Add Item')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
               @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add New Item</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/admin/save/item')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Item Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Category Name</label>

                                    <select name="category_id" id="" class="form-control">
                                        @foreach($item as $v_item)
                                        <option name="category_id" value="{{$v_item->id}}">{{$v_item->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Item Description</label>
                                    <textarea name="description" id=""class="form-control"></textarea>
                                </div>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Item Price</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <input type="file" name="image">
                                </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


@endpush
