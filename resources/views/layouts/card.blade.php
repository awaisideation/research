@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">USER CARD</h5>
                        <span class="card-text" style="color:black;"><strong>Name: </strong>{{$card->name}}</span>
                        <br>
                        <span class="card-text" style="color:black;"><strong>Dept: </strong>{{$card->department}}</span>

                        <br>

                        <span class="card-text"
                              style="color:black;"><strong>Designation: </strong>{{$card->designation->title}}</span>

                        <br>
                        <span class="card-text"
                              style="color:black;"><strong>University: </strong>{{$card->university->title}}</span>

                        <br>
                        <span class="card-text" style="color:black;"><strong>Program: </strong>{{$card->program->title}}</span>

                        <br>
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
                <br>

                {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Dashboard') }}</div>--}}

                {{--<div class="card-body">--}}
                {{--@if (session('status'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                {{--{{ session('status') }}--}}
                {{--</div>--}}
                {{--@endif--}}

                {{--{{ __('You are logged in!') }}--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
