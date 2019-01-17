@extends('layouts.app')

@section('title','Edit Slider')

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
                        <h4 class="card-title ">Add New Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/admin/update/slider/'.$slider->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" value="{{$slider->title}}" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub Title</label>
                                        <input type="text" value="{{$slider->sub_title}}" name="sub_title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input name="image" type="file" class="form-control">
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
