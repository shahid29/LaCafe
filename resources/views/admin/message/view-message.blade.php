@extends('layouts.app')

@section('title','View Message')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
               @include('layouts.partial.Message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{$message->name}}'s Message</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="col-md-12">
                                    <label class="bmd-label-floating">Name: <strong>{{$message->name}}</strong></label><br>
                                    <label class="bmd-label-floating">Email: <strong>{{$message->email}}</strong></label>
                                    <br>
                                    <label class="bmd-label-floating">Subject: <strong>{{$message->subject}}</strong></label>
                                    <p>
                                        {{$message->message}}
                                    </p>
                                    <hr>
                            </div>
                            <a class="btn btn-primary" href="{{url('/admin/message')}}">Back</a>
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
