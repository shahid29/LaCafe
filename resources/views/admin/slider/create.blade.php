@extends('layouts.app')

@section('title','Slider Add')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
               @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add New Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/admin/save/slider')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control">
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
