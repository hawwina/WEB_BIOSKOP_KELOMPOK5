@extends('main')

@section('title')

@section('content')

 <!--================Breadcrumb Area =================-->
 <section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">NOW PLAYING MOVIE</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">HOME</a></li>
                <li class="active">NOW PLAYING</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
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
@endsection