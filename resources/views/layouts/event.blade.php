@extends('layouts.app')
@section('content')
    <div class="rs-publication pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center mb-50 md-mb-30">
                <div class="sub-title">Scholarship</div>
                <h2 class="title mb-0">Our Scholarships</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                @foreach ($scholarships as $scholarship)
                    <div class="product-list">
                        <div class="image-product">
                            <img src="upload/{{$scholarship->image}}" alt="">
                            <div class="overley">
                                <a href="#"><i class="flaticon-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="content-desc text-center">
                            <h2 class="product-title"><a href="#">{{$scholarship->name}}</a></h2>
                            <span class="price">{{$scholarship->title}}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection