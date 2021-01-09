@extends('main')

@section('title')

@section('content')

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life</h6>
                <h2>Relax Your Mind</h2>
                <p>Don’t be late, Book your ticket now!!</p>
                <a href="{{Route('login')}}" class="btn theme_btn button_hover">Get Started</a>
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
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                
                <div class="row mb_30">
                    @foreach ($daftar_movies as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('storage'.$item->upload) }}" width="200px" height="300px" alt="">
                                <a href="{{ url('login') }}" class="btn theme_btn button_hover">Details</a>
                            </div>
                            <a href="{{ url('login') }}"><h4 class="sec_h4">{{$item->movieTitle}}</h4></a>
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
                    <h2 class="title_w">How It Works</h2>
                    <p>3 Simple steps to book your favourit movie!</p>
                </div>
                <div class="row mb_30">
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"></i>1. Choose your favourite movie</h4>
                            <p>choose the movie you want to watch at our theaters</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"></i>2. Pay for the ticket you have chosen </h4>
                            <p>choose the movie you want to watch at our theaters</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"></i>3. Pick your seats & Enjoy watching</h4>
                            <p>choose the movie you want to watch at our theaters</p>
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
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('style/image/about_bg.jpg ') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
<!--================ About History Area  =================-->
@endsection