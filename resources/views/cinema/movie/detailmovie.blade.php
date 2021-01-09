@extends('main')

@section('title')

@section('content')

 <!--================Breadcrumb Area =================-->
 <section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">DETAIL MOVIE</h2>
            <ol class="breadcrumb">
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Select Your Movie Right Now</h2>
        </div>
        <div class="row mb_30">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <form action="{{ url('datamovie/' .$daftar_movies->id)}}" method="post">
                        <div class="hotel_img">
                            <img src="{{ asset('storage'.$daftar_movies->upload) }}" width="200px" height="300px" alt="">
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <section class="button-area">
                    
                    <form action="{{ url('datamovie/' .$daftar_movies->id)}}" method="post">
                        <div>
                            <h2></i>Detail</h2>
                            <br>
                            <h4><b>JUDUL = </b>{{$daftar_movies->movieTitle}}</h4>
                            <h4><b>GENRE = </b>{{$daftar_movies->movieGenre}}</h4>
                            <h4><b>SYNOPSIS = </b>{{$daftar_movies->movieSynopsis}}</h4>
                            <h4><b>DURATION = </b>{{$daftar_movies->movieDuration}}</h4>
                            <h4><b>DATE = </b>{{$daftar_movies->movieRealdate}}</h4>
                            <h4><b>DIRECTOR = </b>{{$daftar_movies->movieDirector}}</h4>
                            <h4><b>ACTORS = </b>{{$daftar_movies->movieActors}}</h4>
                        </div>  
                    </form>
                    <div class="container border-top-generic">
                        <div class="button-group-area mt-30">
                            <a href="{{$daftar_movies->movieTrailer}}" target="_blank" class="genric-btn primary radius">Trailer</a>
                            <a href="{{Route('detailtheater')}}"  class="genric-btn primary radius">Choose Theater</a>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
        
    </div>
</section>
<!--================ Accomodation Area  =================-->
@endsection