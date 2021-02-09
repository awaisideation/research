@extends('layouts.app')
@section('content')
    <div class="" style="height: 200px">
        &nbsp;
    </div>
    <div class="rs-facilities pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="relative">
                <div class="choose-part" style="position: inherit; padding: 30px;max-width: 100%;">
                    <div class="our-facilities mb-15">
                        <div class="">
                            <img src=" upload/{{$event->image}}" alt="images">
                        </div>
                        <div class="content-part pt-30 md-pt-0">
                            <div class="text-part">
                                <h2 class="title"> {{$event->title}}</h2>
                                <p class="desc">
                                    {{$event->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection