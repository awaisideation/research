@extends('layouts.app')
@section('content')
    <div class="" style="height: 200px">
        &nbsp;
    </div>
    <div class="rs-facilities pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="relative" >
                <div class="img-part" style="display: none;">
                    <img src="{{asset('frontend/assets/images/facilities/bg-1.png')}}" alt="images">
                    <div class="media-icon ">
                        <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="choose-part" style="position: inherit; padding: 30px;max-width: 100%;">
                    <div class="sec-title2 md-mb-30">
                        <div class="sub-title uppercase mb-10">
                            Media
                        </div>
                        <h2 class="title mb-0">Photography of Events</h2>
                    </div>
                    @foreach ($events as $event)
                        <div class="our-facilities mb-15">
                            <div class="icon-part">
                                <img src=" upload/{{$event->image}}" alt="images">
                            </div>
                            <div class="content-part pt-30 md-pt-0">
                                <div class="text-part">
                                    <h2 class="title"> {{$event->title}}</h2>
                                    <a href="{{ route('scholarship.show',$scholarship->id) }}">
                                    sdsd</a>
                                    <p class="desc">
                                        {{Str::limit($event->description, 50)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection