@extends('main')

@section('title')

@section('content')
 <!--================Breadcrumb Area =================-->
 <section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">HERE'S YOUR TICKETS!!!</h2>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('style/image/tiket.jpg') }}" alt="img">
            </div>
        </div>
    </div>
</section>
@endsection