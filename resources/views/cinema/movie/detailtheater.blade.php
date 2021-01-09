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
            <h2 class="title_color">Select Your Theater Right Now</h2>
        </div>
        <div class="row mb_30">
        
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <form action="{{ url('datatheater/' .$datatheaters->id)}}" method="post">
                     </form>
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <section class="button-area">
                    
                    <form action="{{ url('datatheater/' .$datatheaters->id)}}" method="post">
                        <div>
                            <div class="container border-top-generic">
                                <div class="button-group-area mt-30">
                                    <a href="{{Route('detailstudio')}}" class="genric-btn primary radius">{{$datatheaters->namaTheater}}</a>
                                </div>
                            </div>
                        </div>  
                    </form>
                    
                </section>
            </div>
        </div> 
        
    </div>
</section>
<!--================ Accomodation Area  =================-->
@endsection