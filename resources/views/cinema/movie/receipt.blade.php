@extends('main')

@section('title')

@section('content')
 <!--================Breadcrumb Area =================-->
 <section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">RECEIPT</h2>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 title_color"></h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        This is your movie tickets
                    </blockquote>
                </div>
            </div>
            <div class="container border-top-generic">
                <div class="button-group-area mt-30">
                   <a href="{{Route('tiket')}}"  class="genric-btn primary radius">Print Tickets</a>
                   {{-- <a href="{{Route('tiket')}}" class="genric-btn primary radius"></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection