@extends('layouts.app')

@section('title','Add Category')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
               @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add New Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/admin/save/category')}}" >
                                @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Category Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
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
