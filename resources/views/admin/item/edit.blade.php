@extends('layouts.app')

@section('title','Update Category')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>  {{ $error }}</span>
                        </div>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Update Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/admin/update/category/'.$category->id)}}">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category Name</label>
                                        <input type="text" value="{{$category->name}}" name="name" class="form-control">
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
