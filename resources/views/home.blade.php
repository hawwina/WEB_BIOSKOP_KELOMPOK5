@extends('main')

@section('title')

@section('content')

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Get Pleasure with the manners</h6>
                <h2>Relax Your Mind</h2>
                <p>Go get your tickets now!</p>
                <a href="#" class="btn theme_btn button_hover">See the latest movie</a>
            </div>
        </div>
    </div>
    
</section>
<!--================Banner Area =================-->
<!--================ Movie Area  =================-->
<section class="accomodation_area section_gap">
    
    
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Explore new movies</h2>
                    <p>Here's the newest movie list for you </p>
                </div>
                
                <div class="row mb_30">
                    @foreach ($daftar_movies as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('storage'.$item->upload) }}" width="200px" height="300px" alt="">
                                <a href="{{ url('detailmovie/' .$item->id) }}" class="btn theme_btn button_hover">Details</a>
                            </div>
                            <a href="{{ url('detailmovie/' .$item->id) }}"><h4 class="sec_h4">{{$item->movieTitle}}</h4></a>
                        </div>
                    </div>  
                    @endforeach
                </div>
                
            </div>
    
</section>
<!--================ Movie Area  =================-->
<!--================ Step Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
    </div> 
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">How to buy a tickets</h2>
            <p>3 Simple steps to get your tickets!</p>
        </div>
        <div class="row mb_30">
            
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"></i>1. Choose your favourite movie</h4>
                    <p>Choose the movie you want to watch at our theaters</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"></i>2. Pick your seats </h4>
                    <p>Pick your seats you want at our theaters that've been listed</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"></i>3. Pay for the ticket you have chose & Enjoy watching</h4>
                    <p>To be confirmed, pay for your ticket according to the nominal price </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Step Area  =================-->
<!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>This is our team and get to know more about this website</p>
                            <a href="#" class="button_hover theme_btn_two">See More ></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('style/image/team.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
<!--================ About History Area  =================-->
@endsection