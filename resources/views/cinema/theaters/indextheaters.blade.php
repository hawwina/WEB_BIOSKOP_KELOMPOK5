@extends('main')

@section('title')

@section('content')
<!--================ Step Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div> 
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Theaters</h2>
                    <p>Select Your Favorite Theaters...</p>
                </div>
                <div class="row mb_30">
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <div class="hotel_img">
                                <img src="{{ asset('style/image/theaters/XXI.jpg ') }}" width="300px" height="200px" alt="">
                                <a href="#" class="btn theme_btn button_hover">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <div class="hotel_img">
                                <img src="{{ asset('style/image/theaters/thepremiere.jpg ') }}" width="300px" height="200px" alt="">
                                <a href="#" class="btn theme_btn button_hover">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <div class="hotel_img">
                                <img src="{{ asset('style/image/theaters/gcv.jpg ') }}" width="300px" height="200px" alt="">
                                <a href="#" class="btn theme_btn button_hover">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--================ Step Area  =================-->
@endsection