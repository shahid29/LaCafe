@extends('layouts.app')

@section('title','Login')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 col-md-offset-1">
                @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{url('/login')}}" >
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" name="password"  required class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>
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
